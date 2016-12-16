<?php

use Illuminate\Database\Seeder;
use \azf\Place;
use \azf\TipoDefect;
use \azf\Defect;
class DefaultDefectos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Lugares definidos de una Casa
        $lugar = new Place;             //id 1
        $lugar->nom_lugar = 'Sala';
        $lugar->save();

        $lugar = new Place;             //id 2
        $lugar->nom_lugar = 'Cocina';
        $lugar->save();

        $lugar = new Place;             //id 3
        $lugar->nom_lugar = 'Recamara';
        $lugar->save();

        $lugar = new Place;             //id 4
        $lugar->nom_lugar = 'Baño';
        $lugar->save();

        $lugar = new Place;             //id 5
        $lugar->nom_lugar = 'Patio';
        $lugar->save();


        //Defectos Globales

        $t_defecto = new TipoDefect;             //id 1
        $t_defecto->nom_defecto = 'Electrico';
        $t_defecto->save();

        $t_defecto = new TipoDefect;             //id 2
        $t_defecto->nom_defecto = 'Plomeria';
        $t_defecto->save();

        $t_defecto = new TipoDefect;             //id 3
        $t_defecto->nom_defecto = 'Pintura';
        $t_defecto->save();
        //-----------------------------------------------------------

        //Defectos de una rama Especifica
        //----------Fallos Electricos 1
        $defecto = new Defect;                  //id 1
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'Foco no prende/apaga';
        $defecto->save();

        $defecto = new Defect;                  //id 2
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'Bomba no prende/apaga';
        $defecto->save();
        //------------------------------------------------------------

        //----------Fallos de Plomeria 2
        $defecto = new Defect;
        $defecto->id_t_defecto = 2;
        $defecto->descripcion = 'Llave rota';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 2;
        $defecto->descripcion = 'Fuga de Agua';
        $defecto->save();
        //------------------------------------------------------------

        //----------Fallos de Plomeria 2
        $defecto = new Defect;
        $defecto->id_t_defecto = 3;
        $defecto->descripcion = 'Pintura desprendida';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 3;
        $defecto->descripcion = 'Humedad';
        $defecto->save();
        //------------------------------------------------------------
    }
}
