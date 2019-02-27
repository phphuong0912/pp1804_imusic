<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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
        if (Auth::check()) {
            if(Auth::user()->role == config('custom.role.admin')) {
                return $next($request);
            }

            return redirect()->route('trang-chu');
        }

        return redirect()->route('trang-chu');
    }
}
        