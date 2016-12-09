<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class RelationProperty extends Model
{
    protected $table = 'rela';
    protected $fillable = [
        'nombreRol'
    ];
}
