<?php

namespace azf\Http\Middleware;

use Closure;

class Inquilino
{
    //Creandolo para restriccion de un inquilino o usuario
    public function handle($request, Closure $next)
    {
        if($request->user()->rol == 1)
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }

    }
}
