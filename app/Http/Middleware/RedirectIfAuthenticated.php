<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('adminarea');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/agent');
                } 
                break;
        }
        return $next($request);


        // ==================
        // if (Auth::guard($guard)->check()) {
        //     if (Auth::user()->type == 'super_admin') 
        //     {
        //         return redirect(url('adminmedia'));
        //     }
        //     else{
        //         return url('/');
        //     }
        //     // return redirect(RouteServiceProvider::HOME);
        // }

        // return $next($request);
    }
}
