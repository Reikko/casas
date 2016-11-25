<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class TipoCasa extends Model
{
    protected $table = 'tipo_casas';
    protected $fillable = [
        'nombre',
    ];
}
