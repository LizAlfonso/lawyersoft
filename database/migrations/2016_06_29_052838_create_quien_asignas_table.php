<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuienAsignasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('quien_asignas', function (Blueprint $table) {

            //primary key
            $table->increments('idQuienAsigna');

           //foreign key
            $table->integer('idPersona')->unsigned();
            $table->foreign('idPersona')->references('idPersona')->on('personas');

            $table->integer('idCiudad')->unsigned();
            $table->foreign('idCiudad')->references('idCiudad')->on('ciudads');


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
        Schema::drop('quien_asignas');
    }
}
