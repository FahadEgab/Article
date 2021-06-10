<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $addHttpCookie = false;

    public function handle(Request $request, Closure $next)
    {
        if(session()->exists('Id')){
            return $next($request);
        }

            return redirect() -> route('signIn');


    }
}
