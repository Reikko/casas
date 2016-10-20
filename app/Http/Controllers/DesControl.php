<?php

namespace azf\Http\Controllers;
use azf\Propiedad;
use Session;
use Redirect;
use azf\Desarrollo;
use azf\Estado;
use azf\Ciudad;
use Illuminate\Http\Request;

use azf\Http\Requests;
use Illuminate\Support\Facades\DB;

class DesControl extends Controller
{
    public function index()
    {
        $dess = DB::table('desarrollos')
            ->join('ciudads', 'ciudads.id', '=', 'desarrollos.id_cdad')
            ->where('desarrollos.id','!=',1)
            ->select('desarrollos.*', 'nom_cdad')->get();
        return view('desa.index',compact('dess'));
    }

    public function create()
    {
        $estados = Estado::lists('nom_edo','id');
        $ciudades = Ciudad::where('id_edo', 1)->lists('nom_cdad','id');

        //Redireccional a donde se crean las direcciones
        return view('desa.create',compact('estados','ciudades'));
    }

    public function store(Request $request)
    {
        $id = DB::table('desarrollos')->insertGetId([
            'id_cdad'=>$request['id_cdad'],
            'nom_des'=>$request['nom_des'],
            'tipo'=>$request['tipo'],
            'unidades'=>$request['unidades'],
            'responsable'=>1,
            'editar'=>1,
        ]);
        for ($i = 0;$i<$request['unidades'];$i++)
        {
            Propiedad::create([
                'id_des'=>$id,
                'id_calle'=>1,
                'id_clie'=>1,
                'num_ext'=>0,
                'num_int'=>0,
            ]);
        }

        return redirect('/des')->with('message','Desarrollo Creado Correctamente');
    }

    public function show($id)
    {
        $des = Desarrollo::find($id);
        $calles = DB::table('calles')->where('id_des', '=', $id)->get();
        return view('desa.view',['des'=>$des],['calles'=>$calles]);
    }

    public function edit($id)
    {
        $desa = Desarrollo::find($id);
        $estados = Estado::lists('nom_edo','id');
        $ciudades = Ciudad::where('id_edo', 1)->lists('nom_cdad','id');
        return view('desa.edit',['desa'=>$desa],compact('estados','ciudades'));
    }

    public function update(Request $request, $id)
    {
        $des = Desarrollo::find($id);
        $des->fill($request->all());
        $des->save();
        Session::flash('message','Desarrollo Editado');
        return Redirect::to('/des');
    }

    public function destroy($id)
    {
        Desarrollo::destroy($id);
        Session::flash('message','Desarrollo eliminado');
        return Redirect::to('/des');
    }
}
