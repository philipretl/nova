<?php

namespace App\Http\Middleware;

use Closure;

class ChequearPermisos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $users_estatus)
    {
        $users_estatus = explode('|', $users_estatus);
        if(chequearPermisos($users_estatus)){
            return $next($request);
        }
        return redirect('/');
    }
}
