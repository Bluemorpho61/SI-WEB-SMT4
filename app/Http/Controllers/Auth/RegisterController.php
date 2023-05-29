<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Enums\RoleList;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function stakeholderRegister(Request $request)
    {
        if($request->isMethod('POST')) {
            return $this->create($request, RoleList::STAKEHOLDER);
        }

        return view('auth.register', [
            'hal' => 'Daftar'
        ]);
    }

    public function developerRegister(Request $request)
    {
        if($request->isMethod('POST')) {
            return $this->create($request, RoleList::DEVELOPER);
        }

        return view('auth.register', [
            'hal' => 'Daftar'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  \Illuminate\Http\Request  $data
     * @return User|\Illuminate\Http\RedirectResponse
     */
    protected function create(Request $data, RoleList $role)
    {

         $user=User::create([
            'nama' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tipe_user' => $role
        ]);

        if ($role==RoleList::STAKEHOLDER){
            Auth::login($user);
            return redirect()->route('stake-home');
        }else{
            Auth::login($user);
            return redirect()->route('dev-home');
        }
    }
}
