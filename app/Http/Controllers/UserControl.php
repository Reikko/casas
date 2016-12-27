<?php

namespace azf\Http\Controllers;

use FontLib\Table\Type\name;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

use azf\Http\Requests;
use azf\Http\Requests\LoginRequest;

class UserControl extends Controller
{

    use AuthenticatesUsers;
    protected $guard = 'admins';
    protected $username = 'name';
    protected $loginView = 'Users.user';

    /*public function __construct()
    {
        $this->middleware('auth:admins', ['except' => 'logout']);
    }*/

    public function authenticated(Request $request,$guard)
    {
        //if (Auth::attempt(['name' => $name, 'password' => $password]))
        //{
            //return redirect()->intended('des');
        //}
            //Session::flash('message',''.Auth::user()->name.'Datos incorrectos');
            return Redirect::to('lugar');

        //return Auth::user();
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('des');
        }

        Session::flash('message','Datos incorrectos');
        return Redirect::to('/user/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
