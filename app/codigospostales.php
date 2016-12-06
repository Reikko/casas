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


    public static function Propiedades()
    {
        return DB::table('reg_houses')
            ->join('codigo', 'reg_houses.id_colonia', '=', 'codigo.id')
            ->select('reg_houses.*', 'codigo.estado', 'codigo.ciudad','codigo.municipio','codigo.cp','codigo.asentamiento','codigo.tipo')
            ->get();
    }
























}
