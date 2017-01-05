<?php

namespace azf\Http\Controllers;

use azf\Cliente;
use azf\User;
use Illuminate\Http\Request;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class ClienteControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = DB::table('clientes')->where('id','!=',1)->get();
        return view('client.index',compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $v = \Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'ap_pat' => 'required|max:255',
            'ap_mat' => 'required|max:255',
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
        $user->rol = 3;             //Rol de cliente
        $user->tabla = 2;           //Tabla clientes
        $user->save();

        $cliente = Cliente::create([
            'nombre'=>$request['nombre'],
            'ap_pat'=> $request['ap_pat'],
            'ap_mat'=> $request['ap_mat'],
            'tel'=> $request['tel'],
            'user'=>$user->id,
        ]);



        $user->id_user = $cliente->id;
        $user->save();

        return redirect('/client')->with('message','Usuario Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
