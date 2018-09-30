<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class PesertaMiddleware
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
        if($request->user() && $request->user()->level < 2 || $request->user()->level > 4){
            return new Response(view('errors.404')->with('role', 'Peserta'));
        }

        return $next($request);
    }
}
