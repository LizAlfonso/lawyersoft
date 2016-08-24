<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
            
            //primary key
            $table->increments('idCaso');

            //normal values
            $table->datetime('fechaAccidente')->nullable();

            //foreign key
            $table->integer('idAsistencia')->unsigned();
            $table->foreign('idAsistencia')->references('idAsistencia')->on('asistencias');

            $table->integer('idVehiculo')->unsigned();
            $table->foreign('idVehiculo')->references('idVehiculo')->on('vehiculos');

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
        Schema::drop('casos');
    }
}
