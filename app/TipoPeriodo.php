<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class TipoPeriodo extends Model
{
    protected $table = 'tipo_periodos';
    protected $fillable = [
        'nom_periodo',
    ];
}
