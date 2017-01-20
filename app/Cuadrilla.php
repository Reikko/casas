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
            ->join('trabajadors','cuadrillas.encargado','=','trabajadors.id')
            ->select('cuadrillas.*','trabajadors.nom_trab','trabajadors.ap_pat','trabajadors.ap_mat')
            ->get();
    }

    public static function arrCuadPorEnc($encargado)                                       //Mustra todas las cuadrillas activas
    {
        return DB::table('cuadrillas')
            ->where('encargado',$encargado)
            ->lists('id');
    }
}
