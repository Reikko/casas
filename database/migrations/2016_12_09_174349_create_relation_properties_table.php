<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_properties', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_reg_house')->unsigned();
            $table->foreign('id_reg_house')->references('id')->on('reg_houses')->onUpdate('cascade');
            $table->integer('id_prop')->unsigned();
            $table->foreign('id_prop')->references('id')->on('inquilinos')->onUpdate('cascade');
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
        Schema::drop('relation_properties');
    }
}
