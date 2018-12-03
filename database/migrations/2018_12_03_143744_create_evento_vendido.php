<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoVendido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_vendido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento_id');
            $table->integer('user_id');
            $table->integer('evento_programacao_id')->unsigned();
            $table->foreign('evento_programacao_id')->references('id')->on('evento_programacao')->onDelete('cascade');
            $table->foreign('evento_id')->references('evento_id')->on('eventos')->onDelete('cascade');
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
        Schema::dropIfExists('evento_vendido');
    }
}
