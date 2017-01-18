<?php

namespace azf\Http\Controllers\Destajo;

use azf\Destajo;
use Illuminate\Http\Request;

use azf\Http\Requests;
use azf\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;


class ImportControl extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function actividad()
    {
        $list = Excel::load('destajo.csv',function ($reader){

            foreach ($reader->get() as $book){
                Destajo::create([
                    'prototipo' =>$book->prototipo,
                    'partida'=>$book->partida,
                    'concepto'=>$book->concepto,
                    'descripcion'=>$book->descripcion,
                    'unidad'=>$book->unidad,
                    'destajo'=>$book->destajo,
                    'fondo'=>$book->fondo,
                    'total'=>$book->total,
                ]);
            }
        });

        return redirect('/');
    }




}
