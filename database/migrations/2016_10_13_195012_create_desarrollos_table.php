<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesarrollosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desarrollos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_cdad')->unsigned();
            $table->foreign('id_cdad')->references('id')->on('ciudads')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nom_des');
            $table->integer('tipo');
            $table->integer('unidades');
            $table->integer('responsable');
            $table->integer('editar');
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
        Schema::drop('desarrollos');
    }
}
