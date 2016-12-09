<?php

namespace azf\Http\Controllers;

use azf\codigospostales;
use azf\regHouse;
use azf\RegistroCuota;
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

    //Manda a la vista donde se pone el codigo postal
    public function cp()
    {
        return view('unaProp.intCp');
    }

    //mostrar todas las casas que estan Registradas
    public function index()
    {
        $casas = codigospostales::Propiedades();
        return view('newHouse.index',compact('casas'));
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
        $cuotas = RegistroCuota::Cuota($ts->id);
        return view('newHouse.show',compact('ts','dir','cuotas'));   //Retorna vista de la propiedad con el id relacionado
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
