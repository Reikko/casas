<?php

namespace azf\Http\Controllers;

use azf\Archivo;
use azf\Trabajador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Session;
use Redirect;
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
        //return $request['foto'];
        $name = "".$id."".$request['renuncia']->getClientOriginalName();
        if($request['foto'] != null )
        {
            $picture = "".$id."".$request['foto']->getClientOriginalName();
            \Storage::disk('local')->put($picture,\File::get($request['foto']));
        }
        else{
            $picture = "imagen.jpg";
        }

        Archivo::create([
            'id_trab' => $id,
            'renuncia' => $name,
            'foto' => $picture,
        ]);
        \Storage::disk('local')->put($name,\File::get($request['renuncia']));

        return redirect('/trabajador/'.$id)->with('message','Trabajador Registrado');
    }

    public function show($id)
    {
        $ts = Trabajador::find($id);
        $arc = DB::table('archivos')
            ->where('id_trab',$id)
            ->first();
        //return compact('arc','ts');
        return view ('trabajad.show',compact('ts','arc'));
    }

    public function edit($id)
    {
        $ts = Trabajador::find($id);
        return view('trabajad.edit',compact('ts'));
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
        $ts = Trabajador::find($id);
        $ts->fill($request->all());
        $ts->save();
        Session::flash('message','Datos editados');
        return Redirect::to('/trabajador/'.$ts->id);
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
