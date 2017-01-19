<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Cuadrilla extends Model
{
    protected $table = 'cuadrillas';
    protected $fillable = [
        'nombre',
        'encargado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
