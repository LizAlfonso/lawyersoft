<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoAseguradorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefono_aseguradoras', function (Blueprint $table) {

            //primary key
            $table->increments('idTelefonoAseguradora');

            //normal values
            $table->string('numero',13);

            //foreign key
            $table->integer('idAseguradoraTercero')->unsigned();
            $table->foreign('idAseguradoraTercero')->references('idAseguradoraTercero')->on('aseguradora_terceros');

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
        Schema::drop('telefono_aseguradoras');
    }
}
