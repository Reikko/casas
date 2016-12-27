<?php

namespace azf\Http\Controllers;

use azf\TipoCuota;
use Illuminate\Http\Request;

use azf\Http\Requests;

class TipoCuotaControl extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    //Ingresando una nuevo nombre de cuota. redireccionando donde se crean las cuotas
    public function store(Request $request)
    {
        $v = \Validator::make($request->all(), [
            'nom_cuota'    => 'required|unique:tipo_cuotas',
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $cuota = $request['cuota'];
        $tipo = new TipoCuota;
        $tipo->fill($request->all());
        $tipo->save();

        return redirect('/cuota/create/'.$cuota);   //Vuelve al registro de cuotas
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
        //
    }
}
