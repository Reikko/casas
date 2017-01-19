<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoCuadrillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_cuadrillas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_cuadrilla')->unsigned();
            $table->foreign('id_cuadrilla')->references('id')->on('cuadrillas')->onUpdate('cascade');
            $table->integer('id_trabajador')->unsigned();
            $table->foreign('id_trabajador')->references('id')->on('trabajadors')->onUpdate('cascade');
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
        Schema::drop('empleado_cuadrillas');
    }
}
