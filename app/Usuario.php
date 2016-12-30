<?php

namespace azf;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $fillable = [
        'name', 'email',
        'password',
        'permiso',
        'tipo',
    ];

    //Atributos que se ocultan para guardar
    protected $hidden = [
        'password', 'remember_token',
    ];


}
