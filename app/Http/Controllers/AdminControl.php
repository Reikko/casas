<?php

namespace azf\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Redirect;

use azf\Http\Requests;

class AdminControl extends Controller
{
    use AuthenticatesUsers;
    protected $guard = 'admins';
    protected $username = 'name';
    protected $loginView = 'Users.user';

    public function authenticated(Request $request,$guard)
    {
        return Redirect::to('lugar');
    }

}
