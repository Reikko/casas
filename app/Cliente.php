<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'nombre', 'ap_pat', 'ap_mat','tel','user'
    ];
}
