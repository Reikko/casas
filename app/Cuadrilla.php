<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cuadrilla extends Model
{
    protected $table = 'cuadrillas';
    protected $fillable = [
        'nombre',
        'encargado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public static function AllCuadrillas()                                       //Mustra todas las cuadrillas activas
    {
        return DB::table('cuadrillas')
            ->join('avances','avances.id_cuadrilla','=','cuadrillas.id')
            ->join('trabajadors','cuadrillas.encargado','=','trabajadors.id')
            ->select('cuadrillas.*','avances.id_cuadrilla','trabajadors.nom_trab','trabajadors.ap_pat','trabajadors.ap_mat')
            ->groupBy('avances.id_cuadrilla')
            ->get();
    }

    public static function cuadList()
    {
        return DB::table('cuadrillas')
            ->lists('nombre','id');
    }

    public static function arrCuadPorEnc($encargado)                                       //Mustra todas las cuadrillas activas
    {
        return DB::table('cuadrillas')
            ->where('encargado',$encargado)
            ->lists('id');
    }

    public static function arrCuad($cuadrilla)                                       //Mustra todas las cuadrillas activas
    {
        return DB::table('avances')
            ->where('id_cuadrilla',$cuadrilla)
            ->lists('id');
    }

    public static function Cuadrillas($id)                                       //Mustra todas las cuadrillas activas
    {
        return DB::table('avances')
            ->where('id_cuadrilla',$id)
            ->join('lotes','avances.id_lote','=','lotes.id')
            ->select('avances.*', 'lotes.nombre')
            ->get();
    }

    public static function avanceCuadrilla($arr)                            //Devuelve las filas que esten en el arreglo
    {
        return DB::table('tabla_avances')->whereIn('id_avance', $arr)
            ->join('destajos', 'tabla_avances.id_destajo', '=', 'destajos.id')
            ->groupBy('id_destajo')
            ->select('tabla_avances.*', 'destajos.concepto', 'destajos.descripcion','destajos.destajo','destajos.fondo','destajos.total')
            ->get();
    }

    public static function MuestraCuadrillas()                                       //Mustra todas las cuadrillas activas
    {
        return DB::table('cuadrillas')
            ->join('trabajadors','cuadrillas.encargado','=','trabajadors.id')
            ->select('cuadrillas.*','trabajadors.nom_trab','trabajadors.ap_pat','trabajadors.ap_mat')
            ->get();
    }

    public static function Cuadrilla($id)                                       //Muestra datos de la cuadrilla como nombre y encargado;
    {
        return DB::table('cuadrillas')
            ->join('trabajadors','cuadrillas.encargado','=','trabajadors.id')
            ->select('cuadrillas.*','trabajadors.nom_trab','trabajadors.ap_pat','trabajadors.ap_mat')
            ->where('cuadrillas.id',$id)
            ->first();
    }

}
