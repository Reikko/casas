<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use \azf\Trabajador;
use \azf\Archivo;

class TrabajadorFalso extends Seeder
{
    //Creando un trabajador falso
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0;$i<2;$i++)
        {

            $trabajador = new Trabajador;
            $trabajador->nom_trab = $faker->name;
            $trabajador->ap_pat = $faker->lastName;
            $trabajador->ap_mat = $faker->lastName;
            $trabajador->edo_civil = 'Soltero';
            $trabajador->sexo = 'Masculino';
            $trabajador->alias = $faker->userName;
            $trabajador->user = 2;
            $trabajador->fecha_nac = $faker->dateTime;
            $trabajador->lug_nac = 'Sin lugar';
            $trabajador->calle = 'Sin lugar';
            $trabajador->num_ext = '000';
            $trabajador->num_int = '000';
            $trabajador->colonia = 'Sin asignar';
            $trabajador->estado = 'San Luis Potosi';
            $trabajador->municipio = 'Sin Municipio';
            $trabajador->puesto = 'No Asignado';
            $trabajador->estatus = '3';
            $trabajador->num_seguro = '00000000000000000';
            $trabajador->rfc = 'XXXXXXXXXXXXXXXXXXXXXX';
            $trabajador->save();

            $archivo = new Archivo;
            $archivo->id_trab = $trabajador->id;
            $archivo->renuncia = '4renuncia.pdf';
            $archivo->foto = 'imagen.jpg';
            $archivo->ife = 'null';
            $archivo->curp = 'null';
            $archivo->comp_dom = 'null';
            $archivo->com_seguro= 'null';
            $archivo->save();
        }


    }
}
