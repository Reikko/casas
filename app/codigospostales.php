<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function DireccionCompleta($id)
    {
        return codigospostales::where('cp','=',$id)
            ->get();
        //return codigospostales::lists('asentamiento','id');
    }

    public static function unaDireccion($id)
    {
        $user = DB::table('codigo')->where('cp', $id)->first();
        return $user;
    }

























}
