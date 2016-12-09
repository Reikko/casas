<?php

namespace azf\Http\Controllers;
use azf\Propiedad;
use Session;
use Redirect;
use azf\Calles;
use azf\Ciudad;
use azf\Desarrollo;
use Illuminate\Http\Request;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class CalleControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $calls = DB::table('desarrollos')
            ->join('ciudads', 'desarrollos.id_cdad', '=', 'ciudads.id')
            ->join('calles','desarrollos.id','=','calles.id_des')->where('calles.id','!=',1)
            ->select('calles.*', 'nom_des','nom_cdad')->get();
        return view('clle.index',compact('calls'));
    }

    public function create()
    {
        $ciudades = Ciudad::lists('nom_cdad','id');
        $desarrolls = Desarrollo::lists('nom_des','id');
        return view('clle.create',compact('ciudades','desarrolls'));
    }

    public function store(Request $request)
    {
        $id_des=$request['id_des'];
        Calles::create([
            'id_des'=>$id_des,
            'nom_calle'=>$request['nom_calle'],
        ]);

        return redirect('/calle')->with('message','Calle Creada Correctamente');
    }

    public function show($id)
    {
        $desa = Desarrollo::find($id);
        $calls = DB::table('desarrollos')
            ->join('ciudads', 'desarrollos.id_cdad', '=', 'ciudads.id')
            ->join('calles','desarrollos.id','=','calles.id_des')->where('calles.id_des','=',$id)
            ->select('calles.*', 'nom_des','nom_cdad')->get();
        return view('clle.show',compact('calls','desa'));
    }

    public function edit($id)
    {
        $call = Calles::find($id);
        $ciudades = Ciudad::lists('nom_cdad','id');
        $desarrolls = Desarrollo::lists('nom_des','id');
        return view('clle.edit',['call'=>$call],compact('ciudades','desarrolls'));
    }

    public function update(Request $request, $id)
    {
        $call = Calles::find($id);
        $call->fill($request->all());
        $call->save();
        Session::flash('message','Calle editada');
        return Redirect::to('/calle/'.$call->id_des);
    }

    public function destroy($id)
    {
        $prop = Propiedad::Propiedades($id);
        foreach ($prop as $p)
        {
            $pro = Propiedad::find($p->id);
            $pro->id_calle = 1;
            $pro->save();
        }

        $call = Calles::find($id);
        Calles::destroy($id);
        Session::flash('message','Calle eliminada');
        return Redirect::to('/calle/'.$call->id_des);
    }

    public function creandoCalle(Request $request,$id)
    {
        if($request -> ajax())
        {
            $desa = Desarrollo::find($id);
            return response()->json($desa);
        }
    }

    public function getDesarrollo($id)
    {
        return view('clle.crease',compact('id'));
    }

    public function store2(Request $request,$id)
    {
        $id_des=$id;
        Calles::create([
            'id_des'=>$id,
            'nom_calle'=>$request['nom_calle'],
        ]);
        //return redirect('/calle/'.$id)->with('message','Calle Creada Correctamente');
        return redirect('/unidad/'.$id_des.'/edit')->with('message','Calle '.$request['nom_calle'].' Agregada Correctamente');
    }
}
