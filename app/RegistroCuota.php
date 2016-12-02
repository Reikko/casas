<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class RegistroCuota extends Model
{
    protected $table = 'tipo_registro_cuotas';
    protected $fillable = [
        'tipo_cuota',
        'tipo_periodo',
        'fecha_ini',
        'fecha_fin',
        'descripcion'
    ];
}
