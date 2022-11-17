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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->float('Total');
            $table->integer('Envio');
            $table->enum('Estado',[1, 2, 3])->default(1);
            $table->string('Direccion');

            $table->unsignedBigInteger('IDCliente');
            $table->unsignedBigInteger('IDSucursal');
            $table->unsignedBigInteger('IDDepartamento');

            $table->foreign('IDCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('IDSucursal')->references('id')->on('sucursals')->onDelete('cascade');
            $table->foreign('IDDepartamento')->references('id')->on('departamentos')->onDelete('cascade');
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
        Schema::dropIfExists('ventas');
    }
};
