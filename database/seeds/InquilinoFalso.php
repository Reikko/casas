<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \azf\Inquilino;
class InquilinoFalso extends Seeder
{
    //Crando Inquilino Falso
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0;$i<5;$i++)
        {
            $inquilino = new Inquilino;
            $inquilino->nom_inquilino= $faker->name;
            $inquilino->ap_pat = $faker->lastName;
            $inquilino->ap_mat = $faker->lastName;
            $inquilino->edo_civil = 'Soltero';
            $inquilino->sexo = 'Masculino';
            $inquilino->tipo = '1';
            $inquilino->alias = $faker->userName;
            $inquilino->fecha_nac = $faker->dateTime;
            $inquilino->lug_nac = 'Sin lugar';
            $inquilino->calle = 'Sin lugar';
            $inquilino->num_ext = '000';
            $inquilino->num_int = '000';
            $inquilino->colonia = 'Sin asignar';
            $inquilino->estado = 'Queretaro';
            $inquilino->municipio = 'Sin Municipio';
            $inquilino->ocupacion = $faker->jobTitle;
            $inquilino->foto = 'imagen.jpg';
            $inquilino->estatus = '3';
            $inquilino->save();
        }


    }
}
