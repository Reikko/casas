<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = [

        'id_prop',
        'inqui',
        'tipo_rol',
        'fecha_ini',
        'fecha_fin',
        'cerrado',
    ];

    public static function Reporte($id)
    {
        return DB::table('reports')
            ->where('id_prop',$id)
            ->get();
    }
}
