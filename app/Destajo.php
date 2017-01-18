<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Destajo extends Model
{
    protected $fillable = [
        'prototipo',
        'partida',
        'concepto',
        'descripcion',
        'unidad',
        'destajo',
        'fondo',
        'total',
    ];

    public static function Destajos($id)
    {
        return DB::table('destajos')->where('prototipo', $id)->get();
    }

    public static function DestajosAll($id)
    {
        return DB::table('destajos')->where('prototipo', $id);
            //->get();
    }

    public static function Pago($id,$valor)
    {
        $destajo = DB::table('destajos')->where('id', $id)->first();
        $dato = ($valor/100)*(($destajo->destajo/100)*$destajo->total);
        return $dato;
    }

}
