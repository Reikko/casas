<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class TipoCuota extends Model
{
    protected $table = 'tipo_cuotas';
    protected $fillable = [
        'nom_cuota',
    ];
}
