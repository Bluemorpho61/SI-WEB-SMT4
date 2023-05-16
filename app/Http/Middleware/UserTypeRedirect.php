<?php

namespace App\Http\Middleware;

use App\Enums\RoleList;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserTypeRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $tipe_user): Response
    {
        if (Auth::check()) {
            # code...
            $user = Auth::user();
            if (in_array($user->tipe_user, $tipe_user)) {
                # code...
                switch ($user->tipe_user) {
                    case RoleList::ADMIN:
                        # code...
                        return redirect()->route('admin-home');
                    case RoleList::DEVELOPER:
                        # code...
                        return redirect()->route('dev-home');
                    case RoleList::STAKEHOLDER:
                        # code...
                        return redirect()->route('stake-home');
                }
            }
        }
        return $next($request);
    }
}