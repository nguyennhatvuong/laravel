<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('code')->unique();
            $table->string('slug')->unique();
            $table->text('detail');
            $table->longText('description');
            $table->text('photo');
            $table->integer('min');
            $table->integer('max');
            $table->string('size')->default('M')->nullable();
            $table->integer('rate')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('weight')->default(200);
            $table->enum('type',['men','women','kids'])->nullable();
            $table->enum('quantity_status',['outOfStock','less','stocking'])->default('stocking');
            $table->string('condition')->default('default');
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->unsignedBigInteger('child_cat_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('SET NULL');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->unsignedBigInteger('color_id')->nullable();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('SET NULL');

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
        Schema::dropIfExists('products');
    }
}
