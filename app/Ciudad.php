<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudads';
    protected $fillable = [
        'id_edo',
        'nom_cdad'
    ];

    public static function ciudades($id)
    {
        return Ciudad::where('id_edo','=',$id)
            ->get();
    }

    public static function CiudadList($id)
    {
        return DB::table('ciudads')
            ->where('id_edo',$id)
            ->lists('nom_cdad','id');
    }


}
