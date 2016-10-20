<?php

namespace azf\Http\Controllers;
use azf\Desarrollo;
use Session;
use Redirect;
use azf\Estado;
use azf\Ciudad;
use Illuminate\Http\Request;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class CdadControl extends Controller
{
    public function index()
    {
        $ciudades = DB::table('ciudads')
            ->join('estados', 'ciudads.id_edo', '=', 'estados.id')->where('ciudads.id','!=',1)
            ->select('ciudads.*', 'nom_edo')->get();
        return view('ciuda.index',compact('ciudades'));
    }

    public function create()
    {
        $states = Estado::lists('nom_edo','id');
        return view('ciuda.create',compact('states'));
    }

    public function store(Request $request)
    {
        Ciudad::create([
            'id_edo'=>$request['id_edo'],
            'nom_cdad'=>$request['nom_cdad'],
        ]);
        return redirect('/cdad')->with('message','Ciudad Creada Correctamente');
    }

    public function show($id)
    {
        $ciu = Ciudad::find($id);
        $dess = DB::table('desarrollos')->where('id_cdad', '=', $id)->get();
        return view('ciuda.view',['dess'=>$dess],['ciu'=>$ciu]);
    }

    public function edit($id)
    {
        $ciu = Ciudad::find($id);
        $states = Estado::lists('nom_edo','id');
        return view('ciuda.edit',['ciu'=>$ciu],compact('states'));
    }


    public function update(Request $request, $id)
    {
        $ciu = Ciudad::find($id);
        $ciu->fill($request->all());
        $ciu->save();
        Session::flash('message','Ciudad editada correctamente');
        return Redirect::to('/cdad');
    }

    public function destroy($id)
    {
        Ciudad::destroy($id);
        Session::flash('message','Ciudad eliminada correctamente');
        return Redirect::to('/cdad');
    }

    public function getDesarrollo(Request $request,$id)
    {
        if($request -> ajax())
        {
            $desa = Desarrollo::ndesarrollos($id);
            return response()->json($desa);
        }
    }

    public function getEditDesarrollo(Request $request,$col,$id)
    {
        if($request -> ajax())
        {
            $desa = Desarrollo::ndesarrollos($id);
            return response()->json($desa);
        }
    }
}
