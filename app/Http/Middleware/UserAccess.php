<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $tipe_user)
    {
        // if (session('id_user')) {
        //     # code...
        //     $user =User::find(session('id_user'));
        //     if ($user) {
        //         # code...
        //         Auth::login($user);
        //     }
        // }
    }
}
