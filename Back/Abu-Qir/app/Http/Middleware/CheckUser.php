<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $roles = explode(':', $role);
        if (in_array(session('login'), $roles)) {
            return $next($request);
        } else {
            return redirect()->route('login')->with('login-error', 'انت لم تقم بالتسجيل');
        }
    }
}
