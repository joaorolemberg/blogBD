<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\DashboardController;

class authUser
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
        if(!auth()->check()){
            //return redirect()->route('user.homepage');
            return redirect()->route('user.login');
            
        }else{
            return $next($request);
        }
            
        //return $next($request);
    }
}
