<?php

namespace azf\Http\Controllers;

use azf\TipoDefect;
use Illuminate\Http\Request;
use Session;
use azf\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class TipoFalloControl extends Controller
{
    //Controller para la administracion de un nuevo tipo

    //Mstrar todos los tipos...
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lugares =TipoDefect::all();
        return view('Fallo.index',compact('lugares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Fallo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fallo = new TipoDefect;
        $fallo->fill($request->all());
        $fallo->save();

        return redirect('fallo')->with('message',''.$fallo->nom_defecto.' Creado ');
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
        $lugar = TipoDefect::find($id);
        return view('Fallo.edit',compact('lugar'));
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
        $lugar = TipoDefect::find($id);
        $lugar->fill($request->all());
        $lugar->save();
        return redirect('fallo')->with('message',''.$lugar->nom_defecto.' Editado');
    }

    //Eliminar un tipo de defecto
    public function destroy($id)
    {
        $lugar = TipoDefect::find($id);
        TipoDefect::destroy($id);
        return redirect('fallo')->with('message',''.$lugar->nom_defecto.' Eliminado ');
    }
}
