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

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('rol'); // Dejar permisos segun rol
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function fila($rep,$id)
    {
        $f = TableReport::find($id);
        $reporte = Report::find($rep);                                  //Busca el reporte al cual se le va a editar
        $filas = TableReport::Filas($reporte->id);                      //Busca todas las filas del reporte
        $lugares = Place::lugaresList();                                //Busca todos los lugares donde este un defecto
        $tipoDef = TipoDefect::TipoDefectoList();                       //Busca todos los posibles defectos
        $defe = Defect::find($f->num_defecto);
        $defecto = Defect::DefectoList($defe->id_t_defecto);                //Devuelve todos los defectos relacionados

        return view('TablaReporte.fila',compact('id','reporte','lugares','tipoDef','defecto','filas','f','defe')); //Retorna a crear la tabla de los reportes
    }

    public function create($id)
    {

    }

    //Crea un nuevo reporte y redirecciona a este para editarlo
    public function store(Request $request)
    {
        $fila = new TableReport;
        $fila->fill($request->all());
        //$fila->f_realizacion = '0000-01-01 00:00:00';
        //return $request->all();
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

    //Editando la fila del reporte
    public function update(Request $request, $id)
    {
        $fila = TableReport::find($id);
        $fila->fill($request->all());
        $fila->save();
        return Redirect::to('tabla/'.$fila->id_reporte.'/edit');
    }

    //Eliminar una fila del reporte
    public function destroy($id)
    {
        $fila = TableReport::find($id);
        TableReport::destroy($id);
        return Redirect::to('tabla/'.$fila->id_reporte.'/edit');
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
