<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Storage;

class Trabajador extends Model
{
    protected $table = 'trabajadors';
    protected $fillable = [
        'id',
        'nom_trab',
        'ap_pat',
        'ap_mat',
        'edo_civil',
        'sexo',
        'alias',
        'fecha_nac',
        'lug_nac',
        'calle',
        'num_ext',
        'num_int',
        'colonia',
        'estado',
        'municipio',
        'puesto',
        'renuncia',
        'ife',
        'curp',
        'rfc',
        'comp_dom',
        'num_seguro',
        'comp_seguro',
        'estatus'
    ];

    public static function Trabajadores()
    {
        return DB::table('trabajadors')
            ->join('archivos','trabajadors.id','=','archivos.id_trab')
            ->select('trabajadors.*','archivos.foto','archivos.renuncia','archivos.ife','archivos.curp','archivos.comp_dom','archivos.com_seguro')
            ->get();
    }

    public static function Trabajador($id)
    {
        return DB::table('trabajadors')
            ->join('archivos','trabajadors.id','=','archivos.id_trab')
            ->select('trabajadors.*','archivos.foto','archivos.renuncia','archivos.ife','archivos.curp','archivos.comp_dom','archivos.com_seguro')
            ->where('trabajadors.id','=',$id)
            ->get();
    }

    public static function TrabajadorList()
    {
        return DB::table('trabajadors')
            ->lists('nom_trab','id');
    }


    public static function TrabajadoresNotAdd($arr)
    {
        //$arr = [];
        return DB::table('trabajadors')
            ->where('id','<>',1)
            ->whereNotIn('id',$arr)
            ->select('nom_trab','ap_pat','ap_mat','id')
            ->get();
    }







































}
