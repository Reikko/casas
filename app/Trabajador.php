<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Trabajador extends Model
{
    protected $table = 'trabajadors';
    protected $fillable = [
        'id',
        'nom_trab',
        'ap_pat',
        'ap_mat',
        'edo_civil',
        'sexo',
        'alias',
        'fecha_nac',
        'lug_nac',
        'calle',
        'num_ext',
        'num_int',
        'colonia',
        'estado',
        'municipio',
        'puesto',
        'renuncia',
        'ife',
        'curp',
        'rfc',
        'comp_dom',
        'num_seguro',
        'comp_seguro',
        'estatus'
    ];



































}
