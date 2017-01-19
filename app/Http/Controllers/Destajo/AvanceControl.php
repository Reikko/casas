<?php

namespace azf\Http\Controllers\Destajo;

use azf\AsignaPrototipo;
use azf\AvanceDestajo;
use azf\Lote;
use azf\Trabajador;
use Illuminate\Http\Request;

use azf\Http\Requests;
use azf\Http\Controllers\Controller;
use Carbon\Carbon;

class AvanceControl extends Controller
{
    public function index()
    {
        //$avances = Avance::all();
        $avances = AvanceDestajo::Avances();
        return view('Avance.index',compact('avances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::now();
        $destajistas = Trabajador::TrabajadorList();
        $lotes = AsignaPrototipo::LotesListAll();          //Muestra lotes del id 1 , esto puede cambiar al cambiar el select
        return view('Avance.create',compact('destajistas','lotes','fecha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avance = new AvanceDestajo;
        $avance->fill($request->all());
        $avance->editable = 1;
        $avance->save();
        return redirect('ingreso/'.$avance->id);
    }

    //Muestra informacion del avance buscado por id
    public function show($id)
    {
        $avance = AvanceDestajo::Avance($id);
        $filas = AvanceDestajo::Destajos($id);
        $lote = Lote::find($avance[0]->id_lote);
        $proto = AsignaPrototipo::Prototipo($lote->id);
        return view('Avance.avanceSemanal',compact('id','lote','filas','proto','avance'));
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
