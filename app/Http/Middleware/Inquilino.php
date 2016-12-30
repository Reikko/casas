<?php

namespace azf\Http\Middleware;

use Closure;

class Inquilino
{
    //Creandolo para restriccion de un inquilino o usuario
    public function handle($request, Closure $next)
    {
        if($request->user()->rol == 0)
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }

    }
}
