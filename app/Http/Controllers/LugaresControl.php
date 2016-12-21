<?php

namespace azf\Http\Controllers;

use azf\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use azf\Http\Requests;

class LugaresControl extends Controller
{
    //Controlador creado para los lugares que se deseen agregar, ver , modificar , etc...

    //Muestra todos los lugares disponibles
    public function index()
    {
        //return auth('web')->user('email');
        //return Auth::user()->name;
        $data = Session::all();
        Session::forget('teams');
        return $data;
        $lugares = Place::all();
        return view('Lugares.index',compact('lugares'));
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
        //
    }

    //Editando el lugar
    public function edit($id)
    {
        $lugar = Place::find($id);
        return view('Lugares.edit',compact('lugar'));
    }

    //Cambiando valores al lugar
    public function update(Request $request, $id)
    {
        $lugar = Place::find($id);
        $lugar->fill($request->all());
        $lugar->save();
        Session::flash('message','Lugar Editado');
        return Redirect::to('/lugar');
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