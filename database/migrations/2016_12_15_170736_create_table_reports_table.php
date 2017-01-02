<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReportsTable extends Migration
{
    //Creando la tabla de reportes
    public function up()
    {
        Schema::create('table_reports', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_reporte')->unsigned();
            //$table->foreign('id_reporte')->references('id')->on('reports')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_reporte')->references('id')->on('reports')->onUpdate('cascade');
            $table->integer('id_lugar')->unsigned();
            $table->foreign('id_lugar')->references('id')->on('places')->onUpdate('cascade');
            $table->integer('num_defecto')->unsigned();
            $table->foreign('num_defecto')->references('id')->on('defects')->onUpdate('cascade');
            $table->dateTime('f_realizacion')->nullable();
            $table->integer('completo')->unsigned();
            $table->string('obs_clie');
            $table->string('obs_trab');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('table_reports');
    }
}
