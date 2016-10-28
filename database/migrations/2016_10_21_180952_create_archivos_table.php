<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_trab')->unsigned();
            $table->foreign('id_trab')->references('id')->on('trabajadors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('foto');
            $table->string('renuncia');
            $table->string('ife');
            $table->string('curp');
            $table->string('comp_dom');
            $table->string('com_seguro');
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
        Schema::drop('archivos');
    }
}
