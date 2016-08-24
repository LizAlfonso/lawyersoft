<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {

            //primary key
            $table->increments('idVehiculo');

            //normal values
            $table->string('placa',10)->unique();
            $table->string('marca',20)->nullable();
            $table->string('modelo',20)->nullable();
            $table->string('color',20)->nullable();

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
        Schema::drop('vehiculos');
    }
}
