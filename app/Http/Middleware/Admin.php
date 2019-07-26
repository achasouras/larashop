<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Admin
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
    	// @todo Update for multiple User roles
		if(Auth::user()->admin == 1){

			return $next($request);

		}else{

			//If not an administrator then throw a 404
			abort(404);

		}

    }
}
