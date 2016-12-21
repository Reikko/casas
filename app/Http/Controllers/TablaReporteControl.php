<?php

namespace azf\Http\Controllers;

use azf\Defect;
use azf\Place;
use azf\Report;
use azf\TableReport;
use azf\TipoDefect;
use Illuminate\Http\Request;
use Redirect;
use Carbon\Carbon;

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

    //Crea un nuevo reporte y redirecciona a este para editarlo
    public function store(Request $request)
    {
        $fila = new TableReport;
        $fila->fill($request->all());
        $fila->save();
        return Redirect::to('tabla/'.$fila->id_reporte.'/edit');
    }

    //Muestra reporte completo del id del reporte que se seleccione
    public function show($id)
    {
        $reporte = Report::find($id);                                   //Busca el reporte al cual se le va a editar
        $filas = TableReport::Filas($reporte->id);                      //Busca todas las filas, falta hacer que coincida con cada reporte
        $lugares = Place::lugaresList();                                //Busca todos los lugares donde este un defecto
        $tipoDef = TipoDefect::TipoDefectoList();                       //Busca todos los posibles defectos
        return view('TablaReporte.ver',compact('id','reporte','lugares','tipoDef','filas')); //Retorna a crear la tabla de los reportes
    }

    //Muestra filas del reporte, permite editarlas, eliminarlas y crear
    public function edit($id)
    {
        $reporte = Report::find($id);                                   //Busca el reporte al cual se le va a editar
        $filas = TableReport::Filas($reporte->id);                      //Busca todas las filas, falta hacer que coincida con cada reporte
        $lugares = Place::lugaresList();                                //Busca todos los lugares donde este un defecto
        $tipoDef = TipoDefect::TipoDefectoList();                       //Busca todos los posibles defectos
        $defecto = Defect::DefectoList(1);                            //Devuelve todos los defectos relacionados
        return view('TablaReporte.edit',compact('id','reporte','lugares','tipoDef','defecto','filas')); //Retorna a crear la tabla de los reportes
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

    //Eliminar una fila del reporte
    public function destroy($id)
    {
        $fila = TableReport::find($id);
        TableReport::destroy($id);
        return Redirect::to('tabla/'.$fila->id_reporte.'/edit');
        return "Eliminando con el id:".$id;
    }

    //Cambia al seleccionar un tipo de defecto
    public function selectDefecto(Request $request,$uno,$id)
    {
        if($request -> ajax())
        {
            $desa = Defect::obtDefectos($id);
            return response()->json($desa);
        }
    }
    public function completarFila($id)
    {
        $now = Carbon::now();
        $fila = TableReport::find($id);
        $fila->completo = 1;
        $fila->f_realizacion = $now;
        $fila->save();
        return redirect('/tabla/'.$fila->id_reporte);

    }

























}
