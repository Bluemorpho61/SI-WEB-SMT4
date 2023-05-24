<?php

namespace App\Http\Controllers;

use App\Enums\RoleList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function hitungDev()
    {
        $jumlahUsr=User::query()->where('tipe_user','=','1')->count();
        dd($jumlahUsr);
        return view('landing',compact($jumlahUsr));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    public function cek()
    {
        if (auth()->user()->tipe_user === 0) {
            # code...
            return redirect('/home');
        } else if (auth()->user()->tipe_user === 1) {
            return redirect('/admin');
        } else if (auth()->user()->tipe_user === 2) {
            return redirect('/developer');
        }
    }

    public function keLogin(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($input)) {
            # code...
            $request->session()->regenerate();
            if (auth()->user()->tipe_user === RoleList::ADMIN) {
                # code...
                return redirect()->intended('/admin');
            } else if (auth()->user()->tipe_user === RoleList::DEVELOPER) {
                # code...
                return redirect()->intended('/developer');
            } else {
                return redirect()->intended('/stake');
            }
        } else {
            return back()->with('error', 'email dan password salah');
        }

    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function adminHome()
    {
        return view('adminHome');
    }

    public function developerHome()
    {
        return view('devHome');
    }
}
