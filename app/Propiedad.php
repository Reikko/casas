<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Propiedad extends Model
{
    protected $table = 'propiedads';
    protected $fillable = [
        'id_des',
        'id_calle',
        'id_clie',
        'num_ext',
        'num_int',
        'asignada',
        'editable',
    ];


    public static function Unidades($id)
    {
        return DB::table('propiedads')
            ->where('id_des','=',$id)
            ->get();
    }

    public static function Calles($id)
    {
        return DB::table('calles')
            ->where('id_des','=',$id)
            ->orWhere('id_des',1)
            ->lists('nom_calle','id');
    }

}
