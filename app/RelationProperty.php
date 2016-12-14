<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RelationProperty extends Model
{
    protected $table = 'relation_properties';
    protected $fillable = [
        'id_reg_house',
        'id_prop'
    ];

    public static function Ocupantes($id)
    {
        return DB::table('relation_properties')
            ->where('id_reg_house',$id)
            ->join('inquilinos','relation_properties.id_prop','=','inquilinos.id')
            ->select('relation_properties.*','inquilinos.nom_inquilino','inquilinos.ap_pat','inquilinos.ap_mat','inquilinos.foto','inquilinos.tipo')
            ->get();
    }

    public static function ArrOcupantes($id)
    {
        return DB::table('relation_properties')
            ->where('id_reg_house',$id)
            ->lists('id_prop');

    }
}
