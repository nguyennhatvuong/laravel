<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Cache;
class LastUserActivity
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
        if(Auth::check()) {
            $expiresAt = Carbon::now()->addMinutes(1);
            $user = Auth::user();
            $user->last_activity = new \DateTime;
            $user->timestamps = false;
            $user->save();
            Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
        }
       
        return $next($request);
    }
}
