<?php

namespace azf\Http\Controllers;

use azf\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use azf\Http\Requests;

class LugaresControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Controlador creado para los lugares que se deseen agregar, ver , modificar , etc...

    //Muestra todos los lugares disponibles
    public function index()
    {
        //return auth('web')->user('email');
        //return Auth::user()->name;
        $data = Session::all();
        //return $data;
        $lugares = Place::all();
        return view('Lugares.index',compact('lugares'));
    }

    //Retorna la vista para crear un nuevo lugar en la casa
    public function create()
    {
        return view('Lugares.create');
    }

    //Permite agregar un lugar en la casa
    public function store(Request $request)
    {
        $lugar = new Place;
        $lugar->nom_lugar = $request['nom_lugar'];
        $lugar->save();

        return redirect('lugar')->with('message',''.$lugar->nom_lugar.' Creado ');
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

    //Editando el lugar
    public function edit($id)
    {
        $lugar = Place::find($id);
        return view('Lugares.edit',compact('lugar'));
    }

    //Cambiando valores al lugar
    public function update(Request $request, $id)
    {
        $lugar = Place::find($id);
        $lugar->fill($request->all());
        $lugar->save();
        Session::flash('message','Lugar Editado');
        return Redirect::to('/lugar');
    }

    //Eliminando un lugar de la casa
    public function destroy($id)
    {
        $lugar = Place::find($id);
        Place::destroy($id);
        return redirect('lugar')->with('message',''.$lugar->nom_lugar.' Eliminado ');
    }
}
