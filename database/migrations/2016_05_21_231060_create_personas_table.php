<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            
            //primary key
            $table->increments('idPersona');

            //normal values
            $table->string('nombres',30);
            $table->string('apellidos',30);
            $table->string('identificacion',10);
            $table->date('fechaNacimiento');

            //foreign key
            //$table->

            //Others
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
        Schema::drop('personas');
    }
}
