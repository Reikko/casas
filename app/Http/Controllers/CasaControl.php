<?php

namespace azf\Http\Controllers;

use azf\codigospostales;
use azf\Inquilino;
use azf\regHouse;
use azf\RegistroCuota;
use azf\RelationProperty;
use azf\TipoCasa;
use Illuminate\Http\Request;

use azf\Http\Requests;

class CasaControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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

    //Mostrar todos los inquilinos y dueños que existen en la casa
    public function relacion($id)
    {
        $arr = RelationProperty::ArrOcupantes($id);     //Devuelve arreglo de ocupantes
        $inq = Inquilino::NoEstan($arr);                //Devuelve inquilinos que no estan registrados
        $ocupantes = RelationProperty::Ocupantes($id);  //Devuelve los ocupantes que ya estan agregados a la propiedad
        return view('Relaciones.index',compact('inq','id','ocupantes'));//Mostrar relaciones en la propiedad
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

    //Muestra todos los datos de una propiedad
    public function show($id)
    {
        $ts = regHouse::find($id);                          //Busca datos de la propiedad y los muestra en la vista
        $dir = codigospostales::find($ts->id_colonia);      //Busca datos relacionados con el codigo postal
        $cuotas = RegistroCuota::Cuota($ts->id);            //Muestra las cuotas en la vista principal de cada casa
        $ocupantes = RelationProperty::Ocupantes($id);
        return view('newHouse.show',compact('ts','dir','cuotas','ocupantes'));   //Retorna vista de la propiedad con el id relacionado
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
