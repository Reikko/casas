<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaAvancesTable extends Migration
{
    //Crear Migracion
    public function up()
    {
        Schema::create('tabla_avances', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_avance')->unsigned();
            $table->foreign('id_avance')->references('id')->on('avances')->onUpdate('cascade');
            $table->integer('id_destajo')->unsigned();
            $table->foreign('id_destajo')->references('id')->on('destajos')->onUpdate('cascade');
            $table->integer('porcentaje');
            $table->timestamps();
        });
    }

    //Deshacer migracion
    public function down()
    {
        Schema::drop('tabla_avances');
    }
}
