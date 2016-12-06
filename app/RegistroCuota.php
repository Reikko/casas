<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class RegistroCuota extends Model
{
    protected $table = 'registro_cuotas';
    protected $fillable = [
        'id_prop',
        'tipo_cuota',
        'tipo_periodo',
        'fecha_ini',
        'fecha_fin',
        'descripcion'
    ];
}
