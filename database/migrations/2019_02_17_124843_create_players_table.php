<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            //$table->string('name');
            $table->string('device_id');
            $table->integer('level')->default(1);;
            $table->integer('score')->default(0);;
            $table->integer('gold')->default(0);; //id de la tabla golds
            $table->integer('inventory')->default(0);; //id de la tabla inventory
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
        Schema::dropIfExists('players');
    }
}
