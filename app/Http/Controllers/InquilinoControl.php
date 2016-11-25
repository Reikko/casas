<?php

namespace azf\Http\Controllers;

use azf\Inquilino;
use Illuminate\Http\Request;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class InquilinoControl extends Controller
{

    public function index()
    {
        $inq = Inquilino::All();
        return view ('inqui.index',compact('inq'));
    }

    //Creando un nuevo Inquilino
    public function create()
    {
        return view('inqui.create');
    }

    public function store(Request $request)
    {
        $id = DB::table('inquilinos')->insertGetId([
            'nom_inquilino' => $request['nom_inquilino'],
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
            'ocupacion' => $request['ocupacion'],
            'estatus' => '3',
            'contrato' => '',
            'doc_prop'=> '',
            'aval'=> '',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);

        if($request['foto'] != null )
        {
            $picture = "".$id."FOTO_INQ".$request['foto']->getClientOriginalName();
            \Storage::disk('local')->put($picture,\File::get($request['foto']));
        }
        else{
            $picture = "imagen.jpg";
        }

        if($request['ife'] != null )
        {
            $fe = "".$id."IFE_INQ".$request['ife']->getClientOriginalName();
            \Storage::disk('local')->put($fe,\File::get($request['ife']));
        }
        else{
            $fe = null;
        }

        if($request['comp_dom'] != null )
        {
            $cdom = "".$id."COMP_INQ".$request['comp_dom']->getClientOriginalName();
            \Storage::disk('local')->put($cdom,\File::get($request['comp_dom']));
        }
        else{
            $cdom = null;
        }

        $inquil = Inquilino::find($id);
        $inquil->foto = $picture;
        $inquil->ife = $fe;
        $inquil->comp_dom = $cdom;
        $inquil->save();

        return redirect('/inquilino/'.$id)->with('message','Inquilino Registrado');
    }

    public function show($id)
    {
        $inq = Inquilino::find($id);
        return view ('inqui.show',compact('inq'));
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
