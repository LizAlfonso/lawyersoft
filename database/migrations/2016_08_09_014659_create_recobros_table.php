<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecobrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recobros', function (Blueprint $table) {

            //primary key
            $table->increments('idRecobro');

            //normal values
            $table->integer('valorDeducible',10);
            $table->integer('valorCancelado',10);
            $table->date('fechaEnvio')->nullable();

            $table->double('porcentajeCancelado',3,2)->nullable();

            $table->string('resultado',25)->nullable();
            $table->string('observaciones',60)->nullable();

            //foreign key
            $table->integer('idFallo')->unsigned();
            $table->foreign('idFallo')->references('idFallo')->on('fallos');

            $table->integer('idAseguradoraTercero')->unsigned();
            $table->foreign('idAseguradoraTercero')->references('idAseguradoraTercero')->on('aseguradora_terceros');

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
        Schema::drop('recobros');
    }
}
