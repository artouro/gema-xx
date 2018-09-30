<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;
use Closure;

class AdminMiddleware
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
        if($request->user() && $request->user()->level != 1){
            return new Response(view('errors.404')->with('role', 'Admin'));
        }

        return $next($request);
    }
}
