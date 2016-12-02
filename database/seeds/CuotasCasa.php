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
        //-----------Cuotas
        $cuota = new TipoCuota;
        $cuota->nom_cuota = 'No definido';
        $cuota->save();

        $cuota = new TipoCuota;
        $cuota->nom_cuota = 'Renta';
        $cuota->save();

        $cuota = new TipoCuota;
        $cuota->nom_cuota = 'Mantenimiento';
        $cuota->save();
        //------------------------------------------------------------------------------
        //----------Periodos
        $cuota = new TipoPeriodo;
        $cuota->nom_periodo = 'No definido';
        $cuota->save();

        $cuota = new TipoPeriodo;
        $cuota->nom_periodo = 'Diario';
        $cuota->save();

        $cuota = new TipoPeriodo;
        $cuota->nom_periodo = 'Semanal';
        $cuota->save();

    }
}
