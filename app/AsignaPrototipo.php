<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AsignaPrototipo extends Model
{
    protected $fillable=[
        'id_prototipo',
        'id_lote'
    ];

    public static function Prototipo($id)
    {
        return DB::table('asigna_prototipos')->where('id_lote', $id)->first();
    }

    public static function Lotes($id)                                       //Mustra todos los lotes relacionados con el id del prototipo
    {
        return DB::table('asigna_prototipos')
            ->where('id_prototipo',$id)
            ->join('lotes','asigna_prototipos.id_lote','=','lotes.id')
            ->select('asignacions.*','lotes.nombre')
            ->get();
    }

    public static function LotesList($id)                                       //Mustra todos los lotes relacionados con el id del prototipo
    {
        //return DB::table('asignacions')->where('id_prototipo', $id)->get();

        return DB::table('asigna_prototipos')
            ->where('id_prototipo',$id)
            ->join('lotes','asigna_prototipos.id_lote','=','lotes.id')
            ->select('lotes.*','asigna_prototipos.id_prototipo')
            ->lists('nombre','id');
    }

    public static function LotesListAll()                                       //Mustra todos los lotes relacionados con el id del prototipo
    {
        return DB::table('asigna_prototipos')
            ->join('lotes','asigna_prototipos.id_lote','=','lotes.id')
            ->select('lotes.*','asigna_prototipos.id_prototipo')
            ->orderBy('lotes.id', 'asc')
            ->lists('nombre','id');
    }

    public static function PrototiposList()
    {
        return DB::table('asigna_prototipos')
            ->join('prototipos','asigna_prototipos.id_prototipo','=','prototipos.id')
            ->select('prototipos.*','asigna_prototipos.id_prototipo')
            ->groupBy('id_prototipo')
            ->lists('nombre','id');
    }
}
