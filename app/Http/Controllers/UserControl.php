<?php

namespace azf\Http\Controllers;

use azf\Rol;
use azf\User;
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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rol');
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
        $roles = Rol::RolesList();
        return view('Users.register',compact('roles'));
    }

    //Registrar un nuevo usuario
    public function store(LoginRequest $request)
    {
        $v = \Validator::make($request->all(), [
            'rol' => 'required',
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $user = new User;
        $user->fill($request->all());
        $user->save();

        return redirect('inquilino');
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
