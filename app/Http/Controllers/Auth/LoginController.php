<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RoleList;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function login(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::where('email', $request->email)->first();


        if (!$user) {
            # code...
            return back()->withErrors(['email' => 'Akun tidak ditemukan'])->withInput();
        }
        if (!Hash::check($request->password, $user->password)) {
            # code...
            return back()->withErrors(['email' => 'Email dan password salah']);
        }
        $routeName = match (true) {
            $user->tipe_user == (RoleList::STAKEHOLDER)->value => 'stake-home',
            $user->tipe_user == (RoleList::ADMIN)->value => 'admin-home',
            $user->tipe_user == (RoleList::DEVELOPER)->value => 'dev-home',

            default => null,
        };

        Auth::login($user);

        if (is_null($routeName)) {
            return redirect()->back()->with('error', 'Silahkan login untuk melanjutkan!');
        }

        return to_route($routeName);

    }

    public function stayLogged()
    {
        if (condition) {
            # code...
        }
    }
}
