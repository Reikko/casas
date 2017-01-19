<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class EmpleadoCuadrilla extends Model
{
    protected $table = 'empleado_cuadrilla';
    protected $fillable = [
        'id_cuadrilla',
        'id_trabajador',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
