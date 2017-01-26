<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmpleadoCuadrilla extends Model
{
    protected $table = 'empleado_cuadrillas';
    protected $fillable = [
        'id_cuadrilla',
        'id_trabajador',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public static function ArrEmpleadoCuadrilla()
    {
        return DB::table('trabajadors')
            ->join('empleado_cuadrillas','trabajadors.id','=','empleado_cuadrillas.id_trabajador')
            ->select('empleado_cuadrillas.*','trabajadors.nom_trab','trabajadors.ap_pat','trabajadors.ap_mat')
            ->lists('empleado_cuadrilla.id_trabajador');
    }

    public static function EmpleadoEnCuadrilla($id)
    {
        return DB::table('trabajadors')
            ->join('empleado_cuadrillas','trabajadors.id','=','empleado_cuadrillas.id_trabajador')
            ->select('empleado_cuadrillas.*','trabajadors.nom_trab','trabajadors.ap_pat','trabajadors.ap_mat')
            ->where('empleado_cuadrillas.id_cuadrilla','=',$id)
            ->get();
    }
}
