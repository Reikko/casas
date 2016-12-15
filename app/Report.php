<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = [

        'id_prop',
        'inqui',
        'fecha_ini',
        'fecha_fin',
        'cerrado',
    ];
}
