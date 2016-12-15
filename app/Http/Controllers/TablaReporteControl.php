<?php

namespace azf\Http\Controllers;

use azf\Defect;
use azf\Place;
use azf\Report;
use azf\TableReport;
use azf\TipoDefect;
use Illuminate\Http\Request;
use Redirect;

use azf\Http\Requests;

class TablaReporteControl extends Controller
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
        $fila = new TableReport;
        $fila->fill($request->all());
        $fila->save();
        return Redirect::to('tabla/'.$fila->id_reporte);
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporte = Report::find($id);                                   //Busca el reporte al cual se le va a editar
        $filas = TableReport::all();                                    //Busca todas las filas, falta hacer que coincida con cada reporte
        $lugares = Place::lugaresList();                                //Busca todos los lugares donde este un defecto
        $tipoDef = TipoDefect::TipoDefectoList();                       //Busca todos los posibles defectos
        $defecto = Defect::DefectoList();                               //Devuelve todos los defectos relacionados
        return view('TablaReporte.create',compact('id','reporte','lugares','tipoDef','defecto','filas')); //Retorna a crear la tabla de los reportes
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
