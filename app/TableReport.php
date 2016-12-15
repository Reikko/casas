<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class TableReport extends Model
{
    protected $table = 'table_reports';
    protected $fillable = [
        'id_reporte',
        'id_lugar',
        'num_defecto',
        'f_realiz',
        'obs_clie',
        'obs_trab',
    ];
}
