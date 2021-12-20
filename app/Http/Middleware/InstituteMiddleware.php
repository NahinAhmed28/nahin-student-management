<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class InstituteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() &&  auth()->user()->roles()->where('role_id' , User::Role['Admin']))
        {
            return $next($request);
        }
        else {
            return redirect()->route('/admin/login');
        }
    }
}
