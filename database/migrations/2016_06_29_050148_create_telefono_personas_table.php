<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefono_personas', function (Blueprint $table) {

            //primary key
            $table->increments('idTelefonoPersona');

            //normal values
            $table->string('numero',13);

            //foreign key
            $table->integer('idPersona')->unsigned();
            $table->foreign('idPersona')->references('idPersona')->on('personas');

            //others
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
        Schema::drop('telefono_personas');
    }
}
