<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadorsTable extends Migration
{

    public function up()
    {
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom_trab');
            $table->string('ap_pat');
            $table->string('ap_mat');
            $table->string('edo_civil');
            $table->string('sexo');
            $table->string('alias');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users')->onUpdate('cascade');
            $table->date('fecha_nac');
            $table->string('lug_nac');
            $table->string('calle');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('colonia');
            $table->string('estado');
            $table->string('municipio');
            $table->string('puesto');
            $table->string('rfc');
            $table->string('num_seguro');
            $table->integer('estatus')->unsigned();
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
        Schema::drop('trabajadors');
    }
}
