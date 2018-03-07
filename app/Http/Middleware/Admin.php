<?php

namespace App\Http\Middleware;

use Closure;
//suse Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

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
      if ( Auth::check() && Auth::user()->isAdmin() )
      {
          return $next($request);
      }

      return redirect('/');
    }
}
