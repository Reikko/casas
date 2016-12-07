<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegistroCuota extends Model
{
    protected $table = 'registro_cuotas';
    protected $fillable = [
        'id_prop',
        'tipo_cuota',
        'tipo_periodo',
        'fecha_ini',
        'fecha_fin',
        'descripcion'
    ];

    public static function Cuota($id)
    {
        return DB::table('registro_cuotas')
            ->join('tipo_cuotas','registro_cuotas.tipo_cuota','=','tipo_cuotas.id')
            ->join('tipo_periodos','registro_cuotas.tipo_periodo','=','tipo_periodos.id')
            ->where('id_prop','=',$id)
            ->select('registro_cuotas.*','nom_cuota','nom_periodo')
            ->get();

        return DB::table('reg_houses')
            ->join('codigo', 'reg_houses.id_colonia', '=', 'codigo.id')
            ->select('reg_houses.*', 'codigo.estado', 'codigo.ciudad','codigo.municipio','codigo.cp','codigo.asentamiento','codigo.tipo')
            ->get();
    }
}
