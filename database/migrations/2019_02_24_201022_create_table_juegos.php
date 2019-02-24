<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJuegos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('juegos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->integer('image')->default(0); //id de la tabla inventory
            $table->string('description')->default('');
            //$table->string('token');
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
        //
        Schema::dropIfExists('juegos');
    }
}
