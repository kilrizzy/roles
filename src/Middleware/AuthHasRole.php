<?php

namespace KilroyWeb\Roles\Middleware;

use Closure;

class AuthHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed $roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!\Auth::user()) {
            return redirect('/login');
        }
        if(!\Auth::user()->roleIn($roles)){
            return redirect('/account');
        }
        return $next($request);
    }
}
