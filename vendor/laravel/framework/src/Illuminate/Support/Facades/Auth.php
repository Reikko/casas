<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Auth\AuthManager
 * @see \Illuminate\Contracts\Auth\Factory
 * @see \Illuminate\Contracts\Auth\Guard
 * @see \Illuminate\Contracts\Auth\StatefulGuard
 */
class Auth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }
}
