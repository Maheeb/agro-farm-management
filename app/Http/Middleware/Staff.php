<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Staff
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
//        return $next($request);

        if (Auth::check() && Auth::user()->role == 'staff') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'admin') {
            return redirect('/admin');
        }

        elseif (Auth::check() && Auth::user()->role == 'visiotr') {
            return redirect('/visitor');
        }
        else {
            return redirect('/login');
        }



    }






}
