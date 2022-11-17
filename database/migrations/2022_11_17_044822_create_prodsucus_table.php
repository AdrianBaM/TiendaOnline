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
        Schema::create('prodsucus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IDProducto');
            $table->unsignedBigInteger('IDSucursal');
            $table->string('Existencias');
            $table->foreign('IDProducto')->references('id')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('prodsucus');
    }
};
