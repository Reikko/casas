<?php

namespace azf\Http\Controllers;

use azf\Cliente;
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
        Cliente::create([
            'nombre'=>$request['nombre'],
            'ap_pat'=> $request['ap_pat'],
            'ap_mat'=> $request['ap_mat'],
            'tel'=> $request['tel'],
            'correo'=> $request['correo'],
            'contra'=> $request['contra'],
        ]);
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
