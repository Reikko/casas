<?php

namespace azf\Http\Controllers;

use azf\RelationProperty;
use Illuminate\Http\Request;
use Redirect;
use Session;
use azf\Http\Requests;

class RelacionPropiedad extends Controller
{
    public function index()
    {

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

    //Creamos la relacion entre el inquilino y la casa Redireccionamos a la vista para agregar...
    public function store(Request $request)
    {
        $id_casa = $request['id_reg_house'];
        $relacion = new RelationProperty;
        $relacion->fill($request->all());
        $relacion->save();
        return Redirect::to('nuevas/'.$id_casa.'/create');
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

    //Eliminar relacion entre la propiedad y el ocupante
    public function destroy($id)
    {
        $casa = RelationProperty::find($id);
        RelationProperty::destroy($id);
        Session::flash('message','Ocupante eliminado');
        return Redirect::to('nuevas/'.$casa->id_reg_house.'/create');
    }
}
