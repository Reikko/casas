<?php

namespace azf\Http\Controllers\Destajo;

use azf\Cuadrilla;
use Illuminate\Http\Request;

use azf\Http\Requests;
use azf\Http\Controllers\Controller;

class AvanceCuadControl extends Controller
{
    //Muestra todo el avance por cuadrilla
    public function index()
    {
        $cuadrillas = Cuadrilla::AllCuadrillas();                        //Falta modificar para ir creando las cuadrillas
        //return $cuadrillas;
        return view('Avance.Cuadrilla.index',compact('cuadrillas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    //retorna una lista de id de la cuadrila seleccionada
    public function show($id)
    {
        $datosCuadrilla = Cuadrilla::find($id);
        $arrCuad = Cuadrilla::arrCuad($id);
        $cuadrillas = Cuadrilla::Cuadrillas($id);                           //Mustra todas los avances relacionados con el id
        $filas = Cuadrilla::avanceCuadrilla($arrCuad);
        //return $filas;

        return view('Avance.Cuadrilla.show',compact('datosCuadrilla','cuadrillas','filas'));
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
