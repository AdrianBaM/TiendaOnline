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
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->float('Precio');
            $table->string('Cod');
            $table->string('Imagen');
            $table->integer('stock');
            $table->unsignedBigInteger('IDMarca');          
            $table->unsignedBigInteger('IDSucursal');          

            $table->foreign('IDMarca')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('IDSucursal')->references('id')->on('sucursals')->onDelete('cascade');
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
