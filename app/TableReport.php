<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TableReport extends Model
{
    protected $table = 'table_reports';
    protected $fillable = [
        'id_reporte',
        'id_lugar',
        'num_defecto',
        'f_realizacion',
        'obs_clie',
        'obs_trab',
    ];

    public static function Filas($id)
    {
        return DB::table('table_reports')
            ->where('id_reporte',$id)
            ->join('places','table_reports.id_lugar','=','places.id')
            ->join('defects','table_reports.num_defecto','=','defects.id')
            ->join('tipo_defects','defects.id_t_defecto','=','tipo_defects.id')
            ->select('table_reports.*','places.nom_lugar','defects.descripcion','tipo_defects.nom_defecto')
            ->get();
    }
}
