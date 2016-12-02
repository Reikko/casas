<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroCuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_cuotas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_prop')->unsigned();
            $table->foreign('id_prop')->references('id')->on('reg_houses')->onUpdate('cascade');
            $table->integer('tipo_cuota')->unsigned();
            $table->foreign('tipo_cuota')->references('id')->on('tipo_cuotas')->onUpdate('cascade');
            $table->integer('tipo_periodo')->unsigned();
            $table->foreign('tipo_periodo')->references('id')->on('tipo_periodos')->onUpdate('cascade');
            $table->dateTime('fecha_ini');
            $table->dateTime('fecha_fin');
            $table->string('descripcion');
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
        Schema::drop('registro_cuotas');
    }
}
