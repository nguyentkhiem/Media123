<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckLogin
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
        if(Auth::check()){
            if(Auth::user()->user_level == '1'){
                 return redirect()->intended('admin/home');
             }else if(Auth::user()->user_level > '1'){
                 return redirect()->intended('/');
             }
        }
        return $next($request); 
    }
}
