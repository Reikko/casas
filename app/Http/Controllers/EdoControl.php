<?php

namespace azf\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
use azf\Estado;
use azf\Ciudad;
use Illuminate\Http\Request;

use azf\Http\Requests;

class EdoControl extends Controller
{
    public function index()
    {
        $estados = DB::table('estados')->where('id','!=',1)->get();
        return view('estado.index',compact('estados'));
    }

    public function getCiudades(Request $request,$id)
    {
        if($request -> ajax())
        {
            $cdads = Ciudad::ciudades($id);
            return response()->json($cdads);
        }
    }

    public function getEditCiudades(Request $request,$n,$id)
    {
        if($request -> ajax())
        {
            $cdads = Ciudad::ciudades($id);
            return response()->json($cdads);
        }
    }

    public function create()
    {
        return view('estado.create');
    }

    public function store(Request $request)
    {
        Estado::create([
            'nom_edo'=>$request['nom_edo'],
        ]);
        return redirect('/des/create')->with('message','Estado Creado Correctamente');
    }

    public function show($id)
    {
        $estad = Estado::find($id);
        $ciu = DB::table('ciudads')->where('id_edo', '=', $id)->get();
        return view('estado.view',['ciu'=>$ciu],['estad'=>$estad]);
    }

    public function edit($id)
    {
        $est = Estado::find($id);
        return view('estado.edit',['est'=>$est]);
    }

    public function update(Request $request, $id)
    {
        $edo = Estado::find($id);
        $edo->fill($request->all());
        $edo->save();
        Session::flash('message','Estado Editado Correctamente');
        return Redirect::to('/edo');
    }

    public function destroy($id)
    {
        Estado::destroy($id);
        Session::flash('message','Estado Eliminado Correctamente');
        return Redirect::to('/edo');
    }
}
