<?php

namespace azf\Http\Controllers;

use azf\Defect;
use azf\TipoDefect;
use Illuminate\Http\Request;

use azf\Http\Requests;

class DescripcionControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $request['id_t_defecto'];
        $descripcion = new Defect;
        $descripcion->fill($request->all());
        $descripcion->save();

        return redirect('tipofallo/'.$tipo)->with('message',''.$descripcion->descripcion.' Creado ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo = TipoDefect::find($id);
        $lugares = Defect::obtDefectos($id);
        return view('Desc.show',compact('lugares','tipo'));
    }

    public function tipo($id)
    {
        $tipo = TipoDefect::find($id);
        return view('Desc.create',compact('tipo'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $def = Defect::find($id);
        $tipo = TipoDefect::find($def->id_t_defecto);
        //return $tipo;
        return view('Desc.edit',compact('tipo','def'));
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
        $tipofallo = Defect::find($id);
        $tipofallo->fill($request->all());
        $tipofallo->save();
        return redirect('tipofallo/'.$tipofallo->id_t_defecto)->with('message',''.$tipofallo->descripcion.' Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $descripcion = Defect::find($id);
        $tipo = TipoDefect::find($descripcion->id_t_defecto);
        Defect::destroy($id);
        return redirect('tipofallo/'.$tipo->id)->with('message',''.$descripcion->descripcion.' Eliminado ');
    }
}
