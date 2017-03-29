<?php

namespace App\Http\Middleware;


use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {


        if (\Auth::user()->hasRole($role)) {

            return $next($request);
        } else {
            return response()->view('errors.401');
        }
    }
}