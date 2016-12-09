<?php

use Illuminate\Database\Seeder;
use azf\TipoCuota;
use azf\TipoPeriodo;

class CuotasCasa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-----------Cuotas por default que existen reiniciar el sistema
        $cuota = new TipoCuota;             //id 1
        $cuota->nom_cuota = 'No definido';
        $cuota->save();

        $cuota = new TipoCuota;             //id 2
        $cuota->nom_cuota = 'Renta';
        $cuota->save();

        $cuota = new TipoCuota;             //id 3
        $cuota->nom_cuota = 'Mantenimiento';
        $cuota->save();

        $cuota = new TipoCuota;             //id 4
        $cuota->nom_cuota = 'Servicio';
        $cuota->save();
        //------------------------------------------------------------------------------
        //Aqui el registro de periodos al iniciar
        //----------Periodos


        $cuota = new TipoPeriodo;           //id = 1
        $cuota->nom_periodo = 'Unico';
        $cuota->save();

        $cuota = new TipoPeriodo;           //id = 2
        $cuota->nom_periodo = 'Diario';
        $cuota->save();

        $cuota = new TipoPeriodo;           //id = 3
        $cuota->nom_periodo = 'Semanal';
        $cuota->save();

        $cuota = new TipoPeriodo;           //id = 4
        $cuota->nom_periodo = 'Quincenal';
        $cuota->save();

        $cuota = new TipoPeriodo;           //id = 5
        $cuota->nom_periodo = 'Mensual';
        $cuota->save();

        $cuota = new TipoPeriodo;           //id = 6
        $cuota->nom_periodo = 'Bimestral';
        $cuota->save();

        $cuota = new TipoPeriodo;           //id = 7
        $cuota->nom_periodo = 'Trimestral';
        $cuota->save();

        $cuota = new TipoPeriodo;           //id = 8
        $cuota->nom_periodo = 'Semestral';
        $cuota->save();

        $cuota = new TipoPeriodo;           //id = 9
        $cuota->nom_periodo = 'Anual';
        $cuota->save();
    }
}
