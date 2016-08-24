<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {

            //primary key
            $table->increments('idAsistencia');

            //normal values
            $table->string('numeroAutorizacion',15)->nullable();
            $table->date('fechaAsignacion');
            $table->string('observaciones',100)->nullable();
            $table->boolean('gravedad');

            //foreign key
            $table->integer('idQuienAsigna')->unsigned();
            $table->foreign('idQuienAsigna')->references('idQuienAsigna')->on('quien_asignas');

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
        Schema::drop('asistencias');
    }
}
