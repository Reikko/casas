<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Calles extends Model
{
    protected $table = 'calles';
    protected $fillable = [
        'id_des',
        'nom_calle'
    ];


}
