<?php

namespace azf\Http\Controllers;

use Illuminate\Http\Request;
use azf\Http\Requests;
use azf\Http\Requests\LoginRequest;
use Session;
use Redirect;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserControl extends Controller
{
    use AuthenticatesUsers;

    protected $loginView = 'Users.user';
    protected $guard = 'admins';
    protected $username = 'name';
    protected $redirectTo = '/home';


    public function authenticated()
    {
        if (\Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1]))
        {
            return redirect('/des');
        }

    }

    public function index()
    {
        return view('/home');
        //return view('layouts.app');
    }
}
