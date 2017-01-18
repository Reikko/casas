<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Prototipo extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public static function PrototipoList()
    {
        return DB::table('prototipos')
            ->lists('nombre','id');
    }

}
