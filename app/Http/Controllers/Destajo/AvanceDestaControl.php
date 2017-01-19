<?php

namespace azf\Http\Controllers\Destajo;

use azf\EmpleadoCuadrilla;
use azf\Trabajador;
use Illuminate\Http\Request;

use azf\Http\Requests;
use azf\Http\Controllers\Controller;

class AvanceDestaControl extends Controller
{
    //Retorna todas las cuadrillas creadas
    public function index()
    {
        $cuadrillas = Trabajador::all();                        //Falta modificar para ir creando las cuadrillas
        return view('Avance.Cuadrilla.index',compact('cuadrillas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    //Muestra avance por destajista
    public function show($id)
    {
        //$destajista = Trabajador::find($id);
        return "Aqui va el avance de la cuadrilla ".$id;
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
