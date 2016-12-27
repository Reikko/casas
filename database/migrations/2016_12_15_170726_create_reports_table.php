<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->engine= 'InnoDB';
            $table->increments('id');
            $table->integer('id_prop')->unsigned();
            $table->foreign('id_prop')->references('id')->on('reg_houses')->onUpdate('cascade');
            $table->integer('inqui')->unsigned();
            $table->integer('tipo_rol')->unsigned();
            $table->dateTime('fecha_ini');
            $table->dateTime('fecha_fin');
            $table->integer('cerrado')->unsigned();
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
        Schema::drop('reports');
    }
}
