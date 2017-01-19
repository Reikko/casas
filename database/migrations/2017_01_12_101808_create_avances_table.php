<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvancesTable extends Migration
{
    public function up()
    {
        Schema::create('avances', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_lote')->unsigned();
            $table->foreign('id_lote')->references('id')->on('lotes')->onUpdate('cascade');
            $table->integer('id_cuadrilla')->unsigned();
            $table->foreign('id_cuadrilla')->references('id')->on('cuadrillas')->onUpdate('cascade');
            $table->integer('editable')->unsigned();
            $table->dateTime('f_ini');
            $table->dateTime('f_fin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('avances');
    }
}
