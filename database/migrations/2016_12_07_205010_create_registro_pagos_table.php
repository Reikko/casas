<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_pagos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_cuota')->unsigned();
            $table->foreign('id_cuota')->references('id')->on('registro_cuotas')->onUpdate('cascade');
            $table->string('comprobante');
            $table->integer('pagado')->unsigned();
            $table->integer('tipo_pago')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registro_pagos');
    }
}
