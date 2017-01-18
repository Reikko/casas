<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destajos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('prototipo')->unsigned();
            $table->foreign('prototipo')->references('id')->on('prototipos')->onUpdate('cascade');
            $table->string('partida');
            $table->string('concepto');
            $table->string('descripcion');
            $table->string('unidad');
            $table->integer('destajo');
            $table->integer('fondo');
            $table->integer('total');
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
        Schema::drop('destajos');
    }
}
