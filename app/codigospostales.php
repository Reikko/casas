<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class codigospostales extends Model
{
    protected $table = 'codigo';
    protected $fillable = [
        'id',
        'idEstado',
        'estado',
        'idMunicipio',
        'municipio',
        'ciudad',
        'zona',
        'cp',
        'asentamiento',
        'tipo',
    ];

    public static function Direccion($id)
    {
        return codigospostales::where('cp','=',$id)
            ->get();
    }
}
