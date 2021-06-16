<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;
class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($request->user() == null){

            
            return redirect('/');
            
        }else{

            if (! $request->user()->hasRole($role)) {

                return redirect('/');
            }

        }

        return $next($request);
    }
}
