<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_ships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('route_ship_id')->nullable();
            $table->foreign('route_ship_id')->references('id')->on('route_ships')->onDelete('SET NULL');
            $table->enum('type',['Giao hàng chuẩn','Giao hàng nhanh']);
            $table->integer('weight');
            $table->integer('urban');
            $table->integer('suburban');
            $table->integer('more_weight');
            $table->string('time');
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
        Schema::dropIfExists('service_ships');
    }
}
