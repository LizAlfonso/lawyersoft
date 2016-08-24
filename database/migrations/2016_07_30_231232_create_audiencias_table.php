<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiencias', function (Blueprint $table) {
            
            //primary key
            $table->increments('idAudiencia');

            //normal values
            $table->date('fecha');
            $table->string('hora',10)->nullable();
            $table->string('observaciones',100)->nullable();

            //foreign key
            $table->integer('idAbogado')->unsigned()->nullable();
            $table->foreign('idAbogado')->references('idAbogado')->on('abogados');

            $table->integer('idCaso')->unsigned()->nullable();
            $table->foreign('idCaso')->references('idCaso')->on('casos');

            $table->integer('idEstadoAudiencia')->unsigned()->nullable();
            $table->foreign('idEstadoAudiencia')->references('idEstadoAudiencia')->on('estado_audiencias');

            $table->integer('idLugar')->unsigned()->nullable();
            $table->foreign('idLugar')->references('idLugar')->on('lugars');

            //others
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('audiencias');
    }
}
