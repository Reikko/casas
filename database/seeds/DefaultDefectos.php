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
        $t_defecto->nom_defecto = 'Albañileria';
        $t_defecto->save();

        $t_defecto = new TipoDefect;             //id 4
        $t_defecto->nom_defecto = 'Aluminios y Puertas';
        $t_defecto->save();

        $t_defecto = new TipoDefect;             //id 5
        $t_defecto->nom_defecto = 'Pisos';
        $t_defecto->save();

        $t_defecto = new TipoDefect;             //id 6
        $t_defecto->nom_defecto = 'Techo';
        $t_defecto->save();

        $t_defecto = new TipoDefect;             //id 7
        $t_defecto->nom_defecto = 'Pintura';
        $t_defecto->save();

        $t_defecto = new TipoDefect;             //id 8
        $t_defecto->nom_defecto = 'Carpinteria';
        $t_defecto->save();


        //-----------------------------------------------------------

        //Defectos de una rama Especifica
        //----------Fallos Electricos 1
        $defecto = new Defect;
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'Contacto no tiene corriente';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'Foco no prende/apaga';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'Lampara no prende/apaga';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'Bomba no prende/apaga';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'Se bota la pastilla';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'No hay luz';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 1;
        $defecto->descripcion = 'No prende el calentador';
        $defecto->save();
        //------------------------------------------------------------

        //----------Fallos de Plomeria 2
        $defecto = new Defect;
        $defecto->id_t_defecto = 2;
        $defecto->descripcion = 'Fuga de agua';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 2;
        $defecto->descripcion = 'No sale agua caliente/fria';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 2;
        $defecto->descripcion = 'Flotador no sirve';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 2;
        $defecto->descripcion = 'WC tapado';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 2;
        $defecto->descripcion = 'Coladera tapada';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 2;
        $defecto->descripcion = 'Olores en registro';
        $defecto->save();

        //------------------------------------------------------------

        //----------Fallos de Albañileria 3
        $defecto = new Defect;
        $defecto->id_t_defecto = 3;
        $defecto->descripcion = 'Grietas';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 3;
        $defecto->descripcion = 'Yeso fisurado/tronado';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 3;
        $defecto->descripcion = 'Callendo el aplanado';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 3;
        $defecto->descripcion = 'Boquillas dañadas';
        $defecto->save();
        //------------------------------------------------------------

        //----------Fallos de Aluminios y Puertas 4
        $defecto = new Defect;
        $defecto->id_t_defecto = 4;
        $defecto->descripcion = 'No abre/cierra ventana';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 4;
        $defecto->descripcion = 'No abre/cierra puerta';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 4;
        $defecto->descripcion = 'Vidrio flojo';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 4;
        $defecto->descripcion = 'Puerta floja';
        $defecto->save();


        $defecto = new Defect;
        $defecto->id_t_defecto = 4;
        $defecto->descripcion = 'Mosquitero se traba';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 4;
        $defecto->descripcion = 'No selladas(Se mete el agua)';
        $defecto->save();


        //------------------------------------------------------------

        //----------Fallos de Pisos 5
        $defecto = new Defect;
        $defecto->id_t_defecto = 5;
        $defecto->descripcion = 'Piso levantado';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 5;
        $defecto->descripcion = 'Piso se hunde';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 5;
        $defecto->descripcion = 'Piso suelto';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 5;
        $defecto->descripcion = 'Roto o fisurado';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 5;
        $defecto->descripcion = 'No tiene zoclo';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 5;
        $defecto->descripcion = 'Sin talón';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 5;
        $defecto->descripcion = 'Sin boquilla';
        $defecto->save();
        //------------------------------------------------------------

        //----------Fallos de Techo 6
        $defecto = new Defect;
        $defecto->id_t_defecto = 6;
        $defecto->descripcion = 'No pintado';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 6;
        $defecto->descripcion = 'Humedad';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 6;
        $defecto->descripcion = 'Cayendo el acabado';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 6;
        $defecto->descripcion = 'Golpe';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 6;
        $defecto->descripcion = 'Spot o foco';
        $defecto->save();
        //------------------------------------------------------------

        //----------Fallos de Pintura 7
        $defecto = new Defect;
        $defecto->id_t_defecto = 7;
        $defecto->descripcion = 'Lugar no pintado';
        $defecto->save();

        $defecto = new Defect;
        $defecto->id_t_defecto = 7;
        $defecto->descripcion = 'Se esta botando la pintura';
        $defecto->save();
        //------------------------------------------------------------

        //----------Fallos de Carpinteria 8
        $defecto = new Defect;
        $defecto->id_t_defecto = 8;
        $defecto->descripcion = 'Defecto 1';
        $defecto->save();
        //------------------------------------------------------------
    }
}
