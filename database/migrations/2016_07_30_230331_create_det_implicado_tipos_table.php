<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetImplicadoTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_implicado_tipos', function (Blueprint $table) {

            //primary key
            $table->increments('idDetImplicadoTipo');

            //foreign key
            $table->integer('idImplicado')->unsigned();
            $table->foreign('idImplicado')->references('idImplicado')->on('implicados');

            $table->integer('idTipo')->unsigned();
            $table->foreign('idTipo')->references('idTipo')->on('tipos');

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
        Schema::drop('det_implicado_tipos');
    }
}
