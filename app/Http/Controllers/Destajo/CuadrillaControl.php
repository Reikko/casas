<?php

namespace azf\Http\Controllers\Destajo;

use azf\Cuadrilla;
use azf\EmpleadoCuadrilla;
use azf\Trabajador;
use Illuminate\Http\Request;

use azf\Http\Requests;
use azf\Http\Controllers\Controller;

class CuadrillaControl extends Controller
{
    //Muestra todas las cuadrillas creadas aunque estas no tengan ningun avance
    public function index()
    {
        $cuadrillas = Cuadrilla::MuestraCuadrillas();
        return view('Cuadrilla.indexcuadrilla',compact('cuadrillas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cuadrilla.create');
    }


    public function store(Request $request)
    {
        $messages = [
            'required'  =>  'Este campo no puede ir vacio.',
            'integer'   =>  'El valor debe estar entero',
            'numeric'   =>  'El valor debe ser un número',
            'max'       =>  'La suma o el valor superan el 100%',
            'min'       =>  'El valor debe ser mayor a 0',
            'exists'    =>  'No existe ningun trabajador con esa clave',
            'unique'    =>  'Ya se registro este nombre',
        ];

        $v = \Validator::make($request->all(), [
            'nombre' => 'required|unique:cuadrillas|max:255',
            'encargado' => 'required|integer|max:255|exists:trabajadors,id',
        ],$messages);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $cuadrilla = new Cuadrilla;
        $cuadrilla->fill($request->all());
        $cuadrilla->save();

        return redirect('cuadrilla/'.$cuadrilla->id);
    }

    //Muestra las caracteristicas de la cuadrila creada asi como los trabajadores que estan en ella
    public function show($id)
    {
        $cuadrilla = Cuadrilla::Cuadrilla($id);
        $arrEmplAdd = EmpleadoCuadrilla::ArrEmpleadoCuadrilla();
        $trabajadores = Trabajador::TrabajadoresNotAdd($arrEmplAdd);
        $empleados = EmpleadoCuadrilla::EmpleadoEnCuadrilla($id);
        return view('Cuadrilla.show',compact('cuadrilla','trabajadores','empleados'));
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
