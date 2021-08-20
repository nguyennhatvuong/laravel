<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_ships', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('description');
            $table->integer('checkSpecial');
            $table->integer('checkProvince');
            $table->integer('checkRegion');
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
        Schema::dropIfExists('route_ships');
    }
}
