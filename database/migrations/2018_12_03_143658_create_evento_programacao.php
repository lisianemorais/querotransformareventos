<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoProgramacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_programacao', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('data_programacao');
            $table->string('hora_programacao');
            $table->integer('qtd_ingressos');
            $table->integer('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('evento_id')->on('eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento_programacao');
    }
}
