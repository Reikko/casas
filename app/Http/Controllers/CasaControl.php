<?php

namespace azf\Http\Controllers;

use azf\codigospostales;
use azf\regHouse;
use azf\TipoCasa;
use Illuminate\Http\Request;

use azf\Http\Requests;

class CasaControl extends Controller
{
    //Solo muestra botones de una o varias unidades a crear
    public function select()
    {
        return view('newHouse.botones');
    }

    public function cp()
    {
        return view('unaProp.intCp');
    }

    public function index()
    {

    }


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

    public function show($id)
    {
        $ts = regHouse::find($id);                          //Busca datos de la propiedad y los muestra en la vista
        $dir = codigospostales::find($ts->id_colonia);      //Busca datos relacionados con el codigo postal
        return view('newHouse.show',compact('ts','dir'));
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
