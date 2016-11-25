<?php

namespace azf\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IfLoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }
        else{
            return redirect()->to('/user/login');
        }
    }
}























































