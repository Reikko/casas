<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AvanceDestajo extends Model
{
    protected $table = 'avances';
    protected $fillable=[
        'id_lote',
        'id_cuadrilla',
        'f_ini',
        'f_fin',
    ];


    public static function LotesArr($id)                            //Devuelve el arreglo de lotes para buscarlos
    {
        return DB::table('avances')->where('id_lote', $id)
            ->lists('id');
    }

    public static function Destajos($id)                            //Devuelve las filas que tengan el id
    {
        return DB::table('tabla_avances')->where('id_avance', $id)
            ->join('destajos', 'tabla_avances.id_destajo', '=', 'destajos.id')
            ->groupBy('id_destajo')
            ->select('tabla_avances.*', 'destajos.concepto', 'destajos.descripcion','destajos.destajo','destajos.fondo','destajos.total',
                DB::raw('SUM(porcentaje) as avance'))
            ->get();
    }

    public static function Avances()                            //Devuelve los datos completos de los avances
    {
        return DB::table('avances')
            ->join('lotes', 'avances.id_lote', '=', 'lotes.id')
            ->join('cuadrillas', 'avances.id_cuadrilla', '=', 'cuadrillas.id')
            ->join('trabajadors', 'cuadrillas.encargado', '=', 'trabajadors.id')
            ->select('avances.*', 'lotes.nombre as Lnombre', 'trabajadors.nom_trab','trabajadors.ap_pat','trabajadors.ap_mat','cuadrillas.nombre as nomCuadrilla')
            ->get();
    }

    public static function Avance($id)                            //Devuelve los datos completos de los avances
    {
        return DB::table('avances')
            ->where('avances.id',$id)
            ->join('lotes', 'avances.id_lote', '=', 'lotes.id')
            ->join('cuadrillas', 'avances.id_cuadrilla', '=', 'cuadrillas.id')
            ->join('trabajadors', 'cuadrillas.encargado', '=', 'trabajadors.id')
            ->select('avances.*', 'lotes.nombre as Lnombre', 'trabajadors.nom_trab','trabajadors.ap_pat','trabajadors.ap_mat')
            ->get();

    }

}
