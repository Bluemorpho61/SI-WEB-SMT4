<?php

namespace App\Http\Middleware;

use App\Enums\RoleList;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                
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

                // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }


}