<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TipoDefect extends Model
{
    protected $table = 'tipo_defects';
    protected $fillable = [
        'nom_defecto'
    ];

    public static function TipoDefectoList()
    {
        return DB::table('tipo_defects')
            ->lists('nom_defecto','id');
    }

}
