<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
        if (Auth::guard('admin')->check() && Auth::user('admin') && Auth::user('admin')->isAdmin==1) {
            return redirect('/admin/home');
        }
        return $next($request);
    }
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin/login');
        }
    }
}
