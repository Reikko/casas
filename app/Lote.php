<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $fillable=[
        'nombre'
    ];

    public static function LoteList()
    {
        return DB::table('lotes')
            ->lists('nombre','id');
    }
}
