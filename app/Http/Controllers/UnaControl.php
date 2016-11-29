<?php

namespace azf\Http\Controllers;

use azf\codigospostales;
use azf\regHouse;
use Illuminate\Http\Request;
use Session;
use Redirect;

use azf\Http\Requests;

class UnaControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    //Creando una nueva Propiedad
    public function store(Request $request)
    {
        $casa = new regHouse;
        $casa->id_colonia = $request['id_colonia'];
        $casa->calle = $request['calle'];
        $casa->num_int=$request['num_int'];
            $casa->num_ext=$request['num_ext'];
        $casa->tipo ='0';
        $casa->save();
        Session::flash('message','Propiedad Registrada');
        return Redirect::to('/nuevas/'.$casa->id);
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

    public function showDireccion(Request $request)
    {
        $cp = $request['codigo'];
        $dir = codigospostales::unaDireccion($cp);

        $direcciones = codigospostales::DireccionCompleta($cp);
        //return $direcciones;
        return view('unaProp.create',compact('dir','direcciones'));
    }
}
