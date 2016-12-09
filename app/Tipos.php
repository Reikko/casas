<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    protected $table = 'tipo_propiedad';
    protected $fillable = [
        'nombre',
    ];
}
