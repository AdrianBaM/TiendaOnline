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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Telefono');
            $table->string('Dpi');
            $table->string('Direccion');
            $table->string('Usuario');
            $table->string('Pass');
            $table->unsignedBigInteger('IDTipo'); 
            $table->unsignedBigInteger('IDSucursal');         

            $table->foreign('IDTipo')->references('id')->on('tipos')->onDelete('cascade');
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
        Schema::dropIfExists('empleados');
    }
};
