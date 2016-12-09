<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom_inquilino');
            $table->string('ap_pat');
            $table->string('ap_mat');
            $table->string('tipo');
            $table->string('edo_civil');
            $table->string('sexo');
            $table->string('alias');
            $table->date('fecha_nac');
            $table->string('lug_nac');
            $table->string('calle');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('colonia');
            $table->string('estado');
            $table->string('municipio');
            $table->string('ocupacion');
            $table->string('foto');
            $table->string('ife');
            $table->string('comp_dom');
            $table->string('contrato');
            $table->string('doc_prop');
            $table->string('aval');
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
        Schema::drop('inquilinos');
    }
}
