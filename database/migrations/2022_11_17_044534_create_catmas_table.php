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
        Schema::create('catmas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IDCategoria');
            $table->unsignedBigInteger('IDMarca');
            

            $table->foreign('IDCategoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('IDMarca')->references('id')->on('marcas')->onDelete('cascade');
            
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
        Schema::dropIfExists('catmas');
    }
};
