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
    public function handle(Request $request, Closure $next, $tipe_user)
    {
        if (in_array(auth()->user()->tipe_user,$tipe_user)) {
            # code...
            return $next($request);
        }
        return redirect('/redirect');
        // return response()->view('');
        // return $next($request);
    }
}
