<?php

namespace azf\Http\Controllers;

use azf\Calles;
use azf\Propiedad;
use Illuminate\Http\Request;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class PropiedadControl extends Controller
{
    public function index()
    {
        $propiedades = DB::table('propiedads')
            ->join('calles', 'propiedads.id_calle', '=', 'calles.id')->select('propiedads.*', 'nom_calle')->get();
        return view('propi.index',compact('propiedades'));
    }
    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $propiedades = DB::table('propiedads')
            ->join('calles', 'propiedads.id_calle', '=', 'calles.id')->select('propiedads.*', 'nom_calle')->where('propiedads.id_des','=',$id)->get();
        return view('propi.index',compact('propiedades'));
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
