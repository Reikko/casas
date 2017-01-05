<?php

use Illuminate\Database\Seeder;
use azf\Rol;
class RolesDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Registro de los roles


        $rol = new Rol;                         //id = 1
        $rol->nombre = 'Super Administrador';
        $rol->save();

        $rol = new Rol;                         //id = 2
        $rol->nombre = 'Visitante';
        $rol->save();

        $rol = new Rol;                         //id = 3
        $rol->nombre = 'Trabajador';
        $rol->save();

        $rol = new Rol;                         //id = 4
        $rol->nombre = 'Cliente';
        $rol->save();

        $rol = new Rol;                         //id = 5
        $rol->nombre = 'Inquilino Dueño';
        $rol->save();

        $rol = new Rol;                         //id = 6
        $rol->nombre = 'Inquilino rentero';
        $rol->save();
    }
}
