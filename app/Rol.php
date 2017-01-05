<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rol extends Model
{
    protected $table = 'rols';
    protected $fillable = [
        'nombre'
    ];

    public static function RolesList()
    {
        return DB::table('rols')
            ->lists('nombre','id');
    }
}
