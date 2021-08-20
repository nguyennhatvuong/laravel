<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class User
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
        
        if(Session::has('role') && Session::get('role')=='khach-hang'){
            return $next($request);
        }
        else{
            return redirect()->route('home');
        }
    }
}
