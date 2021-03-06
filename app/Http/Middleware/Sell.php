<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Sell
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
        if(Session::has('role')&& Session::get('role')=='thu-ngan' || Session::get('role')=='admin'){
            return $next($request);
        }
        else{
            return view('errors.404');
        }
    }
}
