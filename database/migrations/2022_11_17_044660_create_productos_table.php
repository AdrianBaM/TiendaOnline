<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('details');
            $table->decimal('price');
            $table->decimal('shipping_cost');
            $table->string('description');
            $table->string('image_path');
            $table->unsignedBigInteger('brand_id');          
            $table->unsignedBigInteger('category_id');          

            $table->foreign('brand_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('sucursals')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
};
