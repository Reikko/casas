<?php

namespace azf\Http\Controllers\Destajo;

use azf\AsignaPrototipo;
use azf\AvanceDestajo;
use azf\Destajo;
use azf\Lote;
use azf\tablaAvancesDestajo;
use azf\Trabajador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;

use azf\Http\Requests;
use azf\Http\Controllers\Controller;

class IngresoControl extends Controller
{
    public function index()
    {
        $arr = AvanceDestajo::LotesArr(12);
        $hola = tablaAvancesDestajo::MayorUnoArr($arr);

        $nuevo = [];
        foreach ($hola as $h)
        {
            //if($h->avance < 1)
            //$arreglo = [$h];
            //$nuevo
        }



        return $hola;
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

    //Agrega un nuevo avance
    public function store(Request $request)
    {
        $id_destajo = $request['id_destajo'];
        $porcentaje = $request['porcentaje'];
        $id_avance = $request['id_avance'];

        $messages = [
            'required'  =>  'Este campo no puede ir vacio.',
            'integer'   =>  'El valor debe estar entero',
            'numeric'   =>  'El valor debe ser un número',
            'max'       =>  'La suma o el valor superan el 100%',
            'min'       =>  'El valor debe ser mayor a 0',
        ];

        $avance = AvanceDestajo::find($id_avance);
        $filasArr = AvanceDestajo::LotesArr($avance->id_lote);
        $anterior = tablaAvancesDestajo::AvanceAnterior($filasArr,$id_avance);

        $v = Validator::make(['porcentaje' =>$porcentaje], [
            'porcentaje.*'  => 'required|numeric|integer|min:0|max:100',
        ],$messages);

        if ($v->fails())
        {
            //return $request;
            return back()->withErrors($v->errors())->withInput();
        }

        foreach ($anterior as $ant)
        {
            foreach ($id_destajo as $i => $d)
            {
                if($ant->id_destajo == $d)
                {
                    $porcentaje[$i] += $ant->avance;
                    break;
                }
            }
        }

        //return $request['porcentaje'];

        $v = Validator::make(['porcentaje' =>$porcentaje], [
            'porcentaje.*'  => 'required|numeric|integer|min:0|max:100',
        ],$messages);

        //return $v->errors();

        if ($v->fails())
        {
            return back()->withErrors($v->errors())->withInput();
        }

        $porcentaje = $request['porcentaje'];
        $filasLote = AvanceDestajo::Destajos($id_avance);
        foreach ($porcentaje as $i => $p)
        {
            $bool = false;
            foreach ($filasLote as $repetido)
            {
                if($repetido->id_destajo == $id_destajo[$i])
                {
                    $nuevo = tablaAvancesDestajo::find($repetido->id);
                    $nuevo->porcentaje = $porcentaje[$i];
                    $nuevo->save();
                    $bool = true;
                    break;
                }
            }

            if($porcentaje[$i] > "0" && $bool == false) {
                $inserta = new tablaAvancesDestajo;
                $inserta->id_destajo = $id_destajo[$i];
                $inserta->porcentaje = $porcentaje[$i];
                $inserta->id_avance = $id_avance;
                $inserta->save();
            }
        }
        return back();
    }


    //Vista de la tabla para ir agregando los avances
    public function show($id)
    {
        $avance = AvanceDestajo::find($id);
        $filasArr = AvanceDestajo::LotesArr($avance->id_lote);                          //Consigue la lista de los id
        $av_total = tablaAvancesDestajo::FilasDeLotes($filasArr);                       //Devuelve la suma total de los porcentajes (Avance total)
        $av_ant = tablaAvancesDestajo::AvanceAnterior($filasArr,$id);                   //Devuelve la suma total de los porcentajes (Avance anterior)
        $lote = Lote::find($avance->id_lote);                                           //Devuelve datos del lote
        $asigna = AsignaPrototipo::Prototipo($avance->id_lote);                         //Devuleve el primer prototipo relacionado con el lote
        $destajos = Destajo::DestajosAll($asigna->id_prototipo)->paginate(8);          //Consigue los avances de 15 en 15 relacionados con el prototipo
        $empleado = Trabajador::find($avance->id_empleado);                             //Devuelve el trabajador relaciona con el avance
        $filasLote = AvanceDestajo::Destajos($id);
        //return $filasLote;
        return view('Ingreso.actualizaFila',compact('id','avance','lote','destajos','empleado','av_total','av_ant','filasLote'));
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

    public function devPago(Request $request,$id,$valor)
    {
        if($request -> ajax())
        {
            $pago = Destajo::Pago($id,$valor);
            return response()->json($pago);
        }
    }

    public function postValor(Request $request)
    {
        //return $request->all();
        $id_destajo = $request['id_destajo'];
        $porcentaje = $request['porcentaje'];
        $id_avance = $request['id_avance'];

        $messages = [
            'required'  =>  'Este campo no puede ir vacio.',
            'integer'   =>  'El valor debe estar entero',
            'numeric'   =>  'El valor debe ser un número',
            'max'       =>  'La suma o el valor superan el 100%',
            'min'       =>  'El valor debe ser mayor a 0',
        ];

        $avance = AvanceDestajo::find($id_avance);
        $filasArr = AvanceDestajo::LotesArr($avance->id_lote);
        $anterior = tablaAvancesDestajo::AvanceAnterior($filasArr,$id_avance);

        $v = Validator::make(['porcentaje' =>$porcentaje], [
            'porcentaje.*'  => 'required|numeric|integer|min:0|max:100',
        ],$messages);

        if ($v->fails())
        {
            return $v->errors()->toJson();
            //return back()->withErrors($v->errors())->withInput();
        }

        foreach ($anterior as $ant)
        {
            foreach ($id_destajo as $i => $d)
            {
                if($ant->id_destajo == $d)
                {
                    $porcentaje[$i] += $ant->avance;
                    break;
                }
            }
        }

        //return $request['porcentaje'];

        $v = Validator::make(['porcentaje' =>$porcentaje], [
            'porcentaje.*'  => 'required|numeric|integer|min:0|max:100',
        ],$messages);

        //return $v->errors();

        if ($v->fails())
        {

            //else
            //return back()->withErrors($v->errors())->withInput();
        }

        $porcentaje = $request['porcentaje'];
        $filasLote = AvanceDestajo::Destajos($id_avance);
        foreach ($porcentaje as $i => $p)
        {
            $bool = false;
            foreach ($filasLote as $repetido)
            {
                if($repetido->id_destajo == $id_destajo[$i])
                {
                    $nuevo = tablaAvancesDestajo::find($repetido->id);
                    $nuevo->porcentaje = $porcentaje[$i];
                    $nuevo->save();
                    $bool = true;
                    break;
                }
            }

            if($porcentaje[$i] > "0" && $bool == false) {
                $inserta = new tablaAvancesDestajo;
                $inserta->id_destajo = $id_destajo[$i];
                $inserta->porcentaje = $porcentaje[$i];
                $inserta->id_avance = $id_avance;
                $inserta->save();
            }
        }
        //return $request['porcentaje'];
        //return redirect('ingreso/'.$id_avance);
        /*$id_destajo = $request['id_destajo'];
        $porcentaje = $request['porcentaje'];
        $id_avance = $request['id_avance'];

        $messages = [
            'required'  =>  'Este campo no puede ir vacio.',
            'integer'   =>  'El valor debe estar entero',
            'numeric'   =>  'El valor debe ser un número',
            'max'       =>  'La suma o el valor superan el 100%',
            'min'       =>  'El valor debe ser mayor a 0',
        ];

        $avance = AvanceDestajo::find($id_avance);
        $filasArr = AvanceDestajo::LotesArr($avance->id_lote);
        $anterior = tablaAvancesDestajo::AvanceAnterior($filasArr,$id_avance);

        $v = Validator::make(['porcentaje' =>$porcentaje], [
            'porcentaje'  => 'required|numeric|integer|min:0|max:100',
        ],$messages);

        if ($v->fails())
        {
            //return $request->all();
            return back()->withErrors($v->errors())->withInput();
        }



        foreach ($anterior as $ant)
        {
            if($ant->id_destajo == $id_destajo)
            {
                $porcentaje += $ant->avance;
                break;
            }
        }

        $v = Validator::make(['porcentaje' =>$porcentaje], [
            'porcentaje'  => 'required|numeric|integer|min:0|max:100',
        ],$messages);

        if ($v->fails())
        {
            //return back()->withErrors($v->errors())->withInput();
            return redirect()->route('auth_show_path')->withErrors($v->errors())->withInput();
        }

        $porcentaje = $request['porcentaje'];
        $filasLote = AvanceDestajo::Destajos($id_avance);

        $bool = false;
        foreach ($filasLote as $repetido)
        {
            if($repetido->id_destajo == $id_destajo)
            {
                $nuevo = tablaAvancesDestajo::find($repetido->id);
                $nuevo->porcentaje = $porcentaje;
                $nuevo->save();
                $bool = true;
                break;
            }
        }

        if($porcentaje > "0" && $bool == false) {
            $inserta = new tablaAvancesDestajo;
            $inserta->id_destajo = $id_destajo;
            $inserta->porcentaje = $porcentaje;
            $inserta->id_avance = $id_avance;
            $inserta->save();
        }

        return redirect('ingreso/'.$id_avance);*/

    }

}
