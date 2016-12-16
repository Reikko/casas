<?php

namespace azf\Http\Controllers;

use azf\codigospostales;
use azf\regHouse;
use azf\RelationProperty;
use azf\Report;
use Illuminate\Http\Request;
use Carbon\Carbon;
use azf\Http\Requests;

class ReporteControl extends Controller
{
    /**
     * Todo lo relacionado con los reportes
     */

    //muestra todol los reportes relacionados con
    public function crear($id)
    {
        return 'Editar la vista para editar la fila';
    }
    public function index()
    {

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

    //Crear un nuevo reporte con id de la propiedad
    public function store(Request $request)
    {
        $carbon  = Carbon::now();
        $reporte = new Report;
        $reporte->fill($request->all());
        $reporte->fecha_ini = $carbon;
        $reporte->fecha_fin =  Carbon::create(0, 0, 0, 0, 0, 0);
        $reporte->cerrado = 0;
        $reporte->save();
        return redirect('/tabla/'.$reporte->id.'/edit');
        //return $reporte;
    }

    //Muestra los reportes relacionados con el id de la propiedad
    public function show($id)
    {
        $inquilinos = RelationProperty::Ocupantes($id);     //Busca los inquilinos en la propiedad
        $ts = regHouse::find($id);                          //Busca datos de la propiedad y los muestra en la vista
        $dir = codigospostales::find($ts->id_colonia);      //Busca datos relacionados con el codigo postal
        $reportes = Report::Reporte($id);                          //Muestra todos los reportes actuales //falta retornar solo los reportes correspondientes a la propiedad
        return view('Report.create',compact('id','dir','ts','inquilinos','reportes'));      //Retornar hacia la vista del la tabla del reporte
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Funcion editar reporte,lo cierra... y le pone fecha final actual
    public function edit($id)
    {
        $now = Carbon::now();
        $reporte = Report::find($id);
        $reporte->cerrado = 1;
        $reporte->fecha_fin = $now;
        $reporte->save();
        return redirect('/reporte/'.$reporte->id_prop);
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

    //Eliminar un Reporte buscado por id
    public function destroy($id)
    {
        $reporte = Report::find($id);
        Report::destroy($id);
        return redirect('/reporte/'.$reporte->id_prop);
    }
}
