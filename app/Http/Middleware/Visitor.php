<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Visitor
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
        if (Auth::check() && Auth::user()->role == 'visitor') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'staff') {
            return redirect('/staff');
        }
        elseif (Auth::check() && Auth::user()->role == 'admin') {
            return redirect('/admin');
        }

        else {
            return redirect('/login');
        }
    }
}
