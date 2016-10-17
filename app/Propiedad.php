<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedads';
    protected $fillable = [
        'id_des',
        'id_calle',
        'id_clie',
        'num_ext',
        'num_int',
    ];

}
