<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType): Response
    {
        if (auth()->user()->type==$userType) {
            # code...
            return $next($request);
        }
        return response()->json(['Mohon maaf, anda tidak mendapat izin akes ke laman ini']);
        // return response()->view('');
        // return $next($request);
    }
}
