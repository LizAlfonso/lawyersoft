<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFallosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fallos', function (Blueprint $table) {
            
            //primary key
            $table->increments('idFallo');

            //normal values
            $table->date('fecha');
            $table->string('expedienteResolucion',40)->nullable();

            //foreign key
            $table->integer('idAudiencia')->unsigned()->nullable();
            $table->foreign('idAudiencia')->references('idAudiencia')->on('audiencias');

            $table->integer('idResultado')->unsigned()->nullable();
            $table->foreign('idResultado')->references('idResultado')->on('resultados');

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
        Schema::drop('fallos');
    }
}
