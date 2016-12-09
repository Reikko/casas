<?php

namespace azf\Http\Controllers;

use azf\Archivo;
use azf\Trabajador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Session;
use Redirect;
use File;
use PDF;
use Carbon\Carbon;
use azf\Http\Requests;

class TrabControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ts = Trabajador::Trabajadores();
        return view ('trabajad.index',compact('ts'));
    }

    public function create()
    {
        return view('trabajad.create');
    }

    public function store(Request $request)
    {
        $id = DB::table('trabajadors')->insertGetId([
            'nom_trab' => $request['nom_trab'],
            'ap_pat' => $request['ap_pat'],
            'ap_mat' => $request['ap_mat'],
            'edo_civil' => $request['edo_civil'],
            'sexo' => $request['sexo'],
            'alias' => $request['alias'],
            'fecha_nac' =>$request['fecha_nac'],
            'lug_nac' => $request['lug_nac'],
            'calle' => $request['calle'],
            'num_ext' => $request['num_ext'],
            'num_int' => $request['num_int'],
            'colonia' => $request['colonia'],
            'estado' => $request['estado'],
            'municipio' => $request['municipio'],
            'puesto' => $request['puesto'],
            'estatus' => $request['estatus'],
            'rfc' => $request['rfc'],
            'num_seguro' => $request['num_seguro'],
        ]);
        $name = "".$id."".$request['renuncia']->getClientOriginalName();
        if($request['foto'] != null )
        {
            $picture = "".$id."FOTO".$request['foto']->getClientOriginalName();
            \Storage::disk('local')->put($picture,\File::get($request['foto']));
        }
        else{
            $picture = "imagen.jpg";
        }

        if($request['ife'] != null )
        {
            $fe = "".$id."IFE".$request['ife']->getClientOriginalName();
            \Storage::disk('local')->put($fe,\File::get($request['ife']));
        }
        else{
            $fe = "null";
        }

        if($request['curp'] != null )
        {
            $crp = "".$id."CURP".$request['curp']->getClientOriginalName();
            \Storage::disk('local')->put($crp,\File::get($request['curp']));
        }
        else{
            $crp = "null";
        }

        if($request['comp_dom'] != null )
        {
            $cdom = "".$id."HOME".$request['comp_dom']->getClientOriginalName();
            \Storage::disk('local')->put($cdom,\File::get($request['comp_dom']));
        }
        else{
            $cdom = "null";
        }

        if($request['com_seguro'] != null )
        {
            $segur = "".$id."SEGURO".$request['com_seguro']->getClientOriginalName();
            \Storage::disk('local')->put($segur,\File::get($request['com_seguro']));
        }
        else{
            $segur = "null";
        }

        $prue = Trabajador::find($id);
        $prue->alias = 'Reikko';
        Archivo::create([
            'id_trab' => $id,
            'renuncia' => $name,
            'foto' => $picture,
            'ife' => $fe,
            'curp' => $crp,
            'comp_dom'=> $cdom,
            'com_seguro'=> $segur,
        ]);
        \Storage::disk('local')->put($name,\File::get($request['renuncia']));


        //return $request->all();
        return redirect('/trabajador/'.$id)->with('message','Trabajador Registrado');
    }

    public function show($id)
    {
        $ts = Trabajador::find($id);
        $arc = DB::table('archivos')
            ->where('id_trab',$id)
            ->first();
        return view ('trabajad.show',compact('ts','arc'));
    }

    public function edit($id)
    {
        $ts = Trabajador::find($id);
        return view('trabajad.edit',compact('ts'));
    }

    public function update(Request $request, $id)
    {
        $ts = Trabajador::find($id);
        $ts->fill($request->all());
        $ts->save();
        Session::flash('message','Datos editados');
        return Redirect::to('/trabajador/'.$ts->id);
    }

    public function destroy($id)
    {

        $arc = DB::table('archivos')->where('id_trab',$id)->first();
        File::delete(public_path()."/archivos/".$arc->renuncia);
        File::delete(public_path()."/archivos/".$arc->foto);
        File::delete(public_path()."/archivos/".$arc->ife);
        File::delete(public_path()."/archivos/".$arc->curp);
        File::delete(public_path()."/archivos/".$arc->comp_dom);
        File::delete(public_path()."/archivos/".$arc->com_seguro);

        Trabajador::destroy($id);
        Session::flash('message','Trabajador Eliminado');
        return Redirect::to('trabajador');
    }

    public function postPdf(Request $request,$nombre,$app,$apm,$puesto)
    {
        //if($request -> ajax()) {
            $pdf = PDF::loadView('trabajad.renuncia', compact('request','nombre','app','apm','puesto'));
            return $pdf->download('renuncia.pdf');
        //}
    }

    public function getPdf(Request $request,$nombre,$app,$apm,$puesto)
    {
        $dt = Carbon::now();
        setlocale(LC_TIME,'es');
        $fecha = $dt->formatLocalized('%d')." de ". $dt->formatLocalized('%B')." del ".$dt->formatLocalized('%Y')." ";
        $pdf = PDF::loadView('trabajad.renuncia', compact('request','nombre','app','apm','puesto','fecha'));
        return $pdf->download('renuncia.pdf');
    }































}
