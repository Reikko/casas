<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class RegistroPago extends Model
{
    protected $table = 'registro_pagos';
    protected $fillable = [
        'id_cuota',
        'comprobante',
        'pagado',
        'tipo_pago'
    ];
}
