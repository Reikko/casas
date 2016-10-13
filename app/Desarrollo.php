<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Desarrollo extends Model
{
    protected $table = 'desarrollos';
    protected $fillable = [
        'id_cdad',
        'nom_des',
        'tipo',
        'unidades',
        'responsable',
        'editar'
    ];
}
