<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Place extends Model
{
    //Creado para registrar los lugares de cada propiedad
    protected $table = 'places';
    protected $fillable = [
        'nom_lugar',
    ];

    public static function lugaresList()
    {
        return DB::table('places')
            ->lists('nom_lugar','id');
    }
}
