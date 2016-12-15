<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inquilino extends Model
{
    protected $table = 'inquilinos';
    protected $fillable = [
        'id',
        'nom_inquilino',
        'ap_pat',
        'ap_mat',
        'tipo',
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
        'ocupacion',
        'ife',
        'comp_dom',
        'contrato',
        'doc_prop',
        'estatus',
        'aval',
        'foto',
        'created_at',
        'updated_at'
    ];

    public static function NoEstan($arr)
    {
        return DB::table('inquilinos')
                ->whereNotIn('id', $arr)->get();
    }

    public static function inquilinos($id)
    {
        return DB::table('inquilinos')
            ->where('id', $id)->get();
    }



}
