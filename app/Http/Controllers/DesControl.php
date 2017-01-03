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
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $es = Estado::find(1);
        if($es)
        {
            $cdad = Ciudad::find(1);
            if(!$cdad)
            {
                $this->creaDefault();
            }
        }
        else{
            Estado::create([
                'nom_edo'=>'Seleccione un estado',
            ]);
            $this->creaDefault();
        }
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

    //Muestra todas las propiedades de Algun desarrollo
    public function show($id)
    {
        $propiedades = DB::table('propiedads')
            ->join('calles', 'propiedads.id_calle', '=', 'calles.id')->select('propiedads.*', 'nom_calle')->where('propiedads.id_des','=',$id)->get();
        return view('unid.index',compact('propiedades','id'));
    }

    public function edit($id)
    {

        $des = DB::table('desarrollos')                                 //Busca el primer desarrollo
            ->join('ciudads', 'ciudads.id', '=', 'desarrollos.id_cdad')
            ->where('desarrollos.id','=',$id)
            ->select('desarrollos.*', 'nom_cdad','id_edo')->first();

        $estados = Estado::lists('nom_edo','id');
        $ciudades = Ciudad::where('id_edo', $des->id_edo)->lists('nom_cdad','id');
        return view('desa.edit',compact('estados','ciudades','des'));
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

    public function creaDefault()
    {
        Estado::create([
            'nom_edo'=>'Seleccione un estado',
        ]);

        Ciudad::create([
            'id_edo'=>'1',
            'nom_cdad'=>'Seleccione una ciudad',
        ]);

        Desarrollo::create([
            'id_cdad'=>'1',
            ''=>'Seleccione una ciudad',
        ]);
    }

}
