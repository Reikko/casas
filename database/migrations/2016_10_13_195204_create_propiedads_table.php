<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_des')->unsigned();
            $table->integer('id_calle')->unsigned();
            $table->foreign('id_calle')->references('id')->on('calles')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_clie')->unsigned();
            $table->foreign('id_clie')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('num_ext');
            $table->string('num_int');
            $table->integer('asignada')->unsigned()->default(0);
            $table->integer('editable')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('propiedads');
    }
}
