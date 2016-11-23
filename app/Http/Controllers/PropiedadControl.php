<?php

namespace azf\Http\Controllers;

use azf\Calles;
use azf\Propiedad;
use Illuminate\Http\Request;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class PropiedadControl extends Controller
{
    //Index Muestra todas las propiedades
    public function index()
    {
        //mostrar las prmeras sin asignar

    }
    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //mostrar casa seleccionada
    }

    public function edit($id)
    {
        //
    }

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
