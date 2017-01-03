<?php

namespace azf\Http\Controllers;

use azf\RegistroCuota;
use azf\TipoCuota;
use azf\TipoPeriodo;
use Illuminate\Http\Request;
use azf\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Carbon\Carbon;

class CuotaControl extends Controller
{
    /*
     * Este control funciona para el registro de cuotas
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCuota(Request $request,$id)
    {
        $date = Carbon::now();
        $regCuotas = RegistroCuota::Cuota($id);
        $periodos = TipoPeriodo::lists('nom_periodo','id');
        $cuotas = TipoCuota::lists('nom_cuota','id');

        return view('Cuote.create',compact('id','periodos','cuotas','regCuotas','date'));
    }

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
        //
    }

    //Registrar una cuota en la propiedad que le corresponde
    public function store(Request $request)
    {
        //return $request ->all();
        $cuota = new RegistroCuota;
        $cuota->fill($request->all());

        $fecha_fin = Carbon::parse($cuota->fecha_ini);
        $fecha_fin = $fecha_fin->addDay()->toDateTimeString();
        $cuota->fecha_fin = $fecha_fin;


        $cuota->save();
        $tipo_cuota = TipoCuota::find($cuota->tipo_cuota);


        //Deshabilitado enviar correos descomentar para enviar correos
        /*Mail::send('Emails.emails' ,['cuota' => $cuota,'tipo'=> $tipo_cuota],function ($message){
            $message->from('admin@administrador.com', 'Administrador de la pagina AZF');
            $message->to('criszavalacano@gmail.com','Cristobal Zavala')->subject('Se añadio una cuota para ti');
        });*/

        return Redirect::to('cuota/create/'.$cuota->id_prop);
    }

    //Muestra la vista para que se edite una cuota
    public function show($id)
    {
        $cuota = RegistroCuota::find($id);
        $date = Carbon::now();
        $regCuotas = RegistroCuota::Cuota($cuota->id_prop);
        $periodos = TipoPeriodo::lists('nom_periodo','id');
        $cuotas = TipoCuota::lists('nom_cuota','id');

        return view('Cuote.showEdit',compact('id','periodos','cuotas','regCuotas','date','cuota'));
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

    //Guarda los datos al editar
    public function update(Request $request, $id)
    {
        $fila = RegistroCuota::find($id);
        $fila->fill($request->all());
        $fila->save();
        return Redirect::to('cuota/create/'.$fila->id_prop);
    }

    //Eliminando una Cuota por id
    public function destroy($id)
    {
        $id_prop = RegistroCuota::find($id);
        RegistroCuota::destroy($id);
        return Redirect::to('cuota/'.$id_prop->id_prop);
    }
}
