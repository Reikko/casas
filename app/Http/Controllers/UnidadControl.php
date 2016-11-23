<?php

namespace azf\Http\Controllers;

use azf\Cliente;
use azf\Desarrollo;
use azf\Propiedad;
use Illuminate\Http\Request;
use Session;
use Redirect;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;
use Validator;

class UnidadControl extends Controller
{

    public function index()
    {
        $propiedades = DB::table('propiedads')
            ->join('calles', 'propiedads.id_calle', '=', 'calles.id')->select('propiedads.*', 'nom_calle')->get();
        return view('propi.index',compact('propiedades'));
    }

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

    //Aqui se mustran los detalles de la unidad...
    public function show($id)
    {
        $un = Propiedad::find($id);
        $duenio = Cliente::find($un->id_clie);
        return view('unid.show',compact('un','duenio'));
    }

    public function edit($id)
    {
        $unidades = Propiedad::Unidades($id);
        $calles = Propiedad::Calles($id);
        //return $unidades;
        return view('unid.edit',compact('unidades','calles','id'));
    }

    public function update(Request $request, $id)
    {
        $unidades = $request['unidades'];
        $id_calle = $request['id_calle'];
        $num_ext = $request['num_ext'];
        $num_int = $request['num_int'];

        $v = Validator::make($request->all(), [
            'num_ext.*'=>'required',
            'num_int.*'=>'required',
            'id_calle' => 'not_in:1'
        ]);

        if ($v->fails())
        {
            return redirect()->to('/unidad/'.$id.'/edit');
        }
        else{
            foreach ($unidades as $i => $uni)
            {
                $unid = Propiedad::find($uni);
                $unid->id_calle = $id_calle[$i];
                $unid->num_ext = $num_ext[$i];
                $unid->num_int = $num_int[$i];
                $unid->save();
            }
            return redirect()->to('/des/'.$id);
        }
    }

    public function destroy($id)
    {
        $des = Propiedad::find($id);
        Propiedad::destroy($id);
        Session::flash('message','Unidad Eliminada');
        return redirect()->to('/des/'.$des->id_des.'');
    }
}
