<?php

namespace azf\Http\Controllers;

use azf\Propiedad;
use Illuminate\Http\Request;

use Redirect;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class UnidadControl extends Controller
{

    public function index()
    {
        $propiedades = DB::table('propiedads')
            ->join('calles', 'propiedads.id_calle', '=', 'calles.id')->select('propiedads.*', 'nom_calle')->get();
        return view('propi.index',compact('propiedades'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propiedades = DB::table('propiedads')
            ->join('calles', 'propiedads.id_calle', '=', 'calles.id')->select('propiedads.*', 'nom_calle')->where('propiedads.id_des','=',$id)->get();
        return view('unid.index',compact('propiedades','id'));
    }

    public function edit($id)
    {
        $unidades = Propiedad::Unidades($id);
        $calles = Propiedad::Calles($id);
        //return $unidades;
        return view('unid.edit',compact('unidades','calles','id'));
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
        $unidades = $request['unidades'];
        $id_calle = $request['id_calle'];
        $num_ext = $request['num_ext'];
        $num_int = $request['num_int'];
        foreach ($unidades as $i => $uni)
        {
            $unid = Propiedad::find($uni);
            $unid->id_calle = $id_calle[$i];
            $unid->num_ext = $num_ext[$i];
            $unid->num_int = $num_int[$i];
            $unid->save();
        }
        return Redirect::to('/unidad/'.$id);
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
