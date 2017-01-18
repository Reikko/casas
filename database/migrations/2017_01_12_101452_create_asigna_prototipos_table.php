<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaPrototiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_prototipos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_prototipo')->unsigned();
            $table->foreign('id_prototipo')->references('id')->on('prototipos')->onUpdate('cascade');
            $table->integer('id_lote')->unsigned();
            $table->foreign('id_lote')->references('id')->on('lotes')->onUpdate('cascade');
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
        Schema::drop('asigna_prototipos');
    }
}
