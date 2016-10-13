<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $table = 'estados';
    protected $fillable = [
        'nom_edo'
    ];
}
