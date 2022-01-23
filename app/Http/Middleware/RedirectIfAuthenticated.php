<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        //$guards = empty($guards) ? [null] : $guards;

        /*foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if($guard == 'technician'){
                    return redirect()->route('technician.home');
                }
                return redirect()->route('student.home');
                //return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);*/

        if ($guard == "technician" && Auth::guard($guard)->check()) {
            return redirect('/technician');
        }
        if ($guard == "student" && Auth::guard($guard)->check()) {
            return redirect('/student');
        }
        if ($guard == "lecturer" && Auth::guard($guard)->check()) {
            return redirect('/lecturer');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
