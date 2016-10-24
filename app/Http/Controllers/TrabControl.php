<?php

namespace azf\Http\Controllers;

use azf\Archivo;
use azf\Trabajador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use azf\Http\Requests;

class TrabControl extends Controller
{
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
        $picture = "".$id."".$request['foto']->getClientOriginalName();
        Archivo::create([
            'id_trab' => $id,
            'renuncia' => $name,
            'foto' => $picture,
        ]);
        \Storage::disk('local')->put($name,\File::get($request['renuncia']));
        \Storage::disk('local')->put($picture,\File::get($request['foto']));
        return redirect('/trabajador/'.$id)->with('message','Trabajador Registrado');
    }

    public function show($id)
    {
        $trabaja = Archivo::find($id);
        return view('trabajad.show',compact('trabaja'));
    }

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
