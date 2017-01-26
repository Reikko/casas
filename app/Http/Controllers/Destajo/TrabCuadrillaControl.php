<?php

namespace azf\Http\Controllers\Destajo;

use azf\EmpleadoCuadrilla;
use Illuminate\Http\Request;

use azf\Http\Requests;
use azf\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TrabCuadrillaControl extends Controller
{
    public function index()
    {
        //
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
        $cuadrilla = $request['id_cuadrilla'];
        //return $request->all();

        $asigna = new EmpleadoCuadrilla;
        $asigna->fill($request->all());
        $asigna->save();

        return redirect('cuadrilla/'.$cuadrilla);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $asignacion = EmpleadoCuadrilla::find($id);
        EmpleadoCuadrilla::destroy($id);
        return Redirect::to('cuadrilla/'.$asignacion->id_cuadrilla);
    }
}
