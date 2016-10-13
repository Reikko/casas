<?php

namespace azf\Http\Controllers;

use Illuminate\Http\Request;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class DesControl extends Controller
{
    public function index()
    {
        $dess = DB::table('desarrollos')
            ->join('ciudads', 'ciudads.id_edo', '=', 'desarrollos.id')->select('desarrollos.*', 'nom_cdad')->get();
        return view('desa.index',compact('dess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desa.create');
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
        $ciu = Ciudad::find($id);
        $dess = DB::table('desarrollos')->where('id_cdad', '=', $id)->get();
        return view('ciuda.view',['dess'=>$dess],['ciu'=>$ciu]);
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
