<?php

namespace App\Http\Middleware;

use Closure;
//use App\User;
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
		
		
        if (Auth::guard($guard)->check()) {
			
		/*
		logic to check uniquie user id
		$user=Auth::user();
		dd($user);
		
		 echo "Authenticated user";
		*/
         return redirect('/home');
        }
		
        return $next($request);
		
    }
}
