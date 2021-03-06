<?php 

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (\Auth::user()->can($permission)) {

            return $next($request);
        } else {
            return response()->view('errors.401');
        }
    }
}