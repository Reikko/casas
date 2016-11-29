<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class regHouse extends Model
{
    protected $table = 'reg_houses';
    protected $fillable = [
        'id_colonia',
        'calle',
        'num_ext',
        'num_int',
        'tipo',
    ];
}
