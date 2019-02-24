<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJuegosMonedas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('juegos_monedas', function (Blueprint $table) {
            $table->integer('juego_id')->unsigned();
            $table->integer('moneda_id')->unsigned();
        
            $table->foreign('juego_id')->references('id')->on('juegos');
            $table->foreign('moneda_id')->references('id')->on('monedas');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('juegos_monedas');
    }
}
