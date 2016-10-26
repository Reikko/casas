<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Archivo extends Model
{
    protected $table = 'archivos';

    protected $fillable = [
        'id_trab',
        'renuncia',
        'ife',
        'curp',
        'comp_dom',
        'foto',
    ];

    /*Descomentar si se quiere cambiar el atributo
     * public function setRenunciaAttribute($path)
    {
        $this->attributes['renuncias'] = "Renuncia".$path->getClientOriginalName();
        $name = "Renuncia".$path->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($path));
    }*/

    /*public static function Trabajador($id)
    {
        return DB::table('archivos')
            ->where('id_trab','=',$id)
            ->get();
    }*/


}
