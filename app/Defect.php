<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Defect extends Model
{
    //Creado para registrar los defectos de cada tipo de defecto
    protected $table = 'defects';
    protected $fillable = [
        'id_t_defecto',
        'descripcion',
    ];

    public static function DefectoList()
    {
        return DB::table('defects')
            ->lists('descripcion','id');
    }
}
