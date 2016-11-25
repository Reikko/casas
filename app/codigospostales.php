<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class codigospostales extends Model
{
    protected $table = 'codigospostales';
    protected $fillable = [
        'CodigoPostal',
        'Colonia',
        'Municipio',
        'Estado',
    ];

    public static function Direccion($id)
    {
        return codigospostales::where('CodigoPostal','=',$id)
            ->get();
    }
}
