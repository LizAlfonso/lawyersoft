<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetCasoImplicadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_caso_implicados', function (Blueprint $table) {

            //primary key
            $table->increments('idDetCasoImplicado');

            //foreign key
            $table->integer('idCaso')->unsigned();
            $table->foreign('idCaso')->references('idCaso')->on('casos');

            $table->integer('idImplicado')->unsigned();
            $table->foreign('idImplicado')->references('idImplicado')->on('implicados');

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
        Schema::drop('det_caso_implicados');
    }
}
