<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalles', function (Blueprint $table) {
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('clientes')->onDelete('cascade');
        });

        Schema::table('detalles', function (Blueprint $table) {
            $table->unsignedBigInteger('id_reservation');
            $table->foreign('id_reservation')->references('id')->on('reservaciones')->onDelete('cascade');
        });

        Schema::table('reservaciones', function (Blueprint $table) {
            $table->unsignedBigInteger('id_product');
            $table->foreign('id_product')->references('id')->on('productos')->onDelete('cascade');
        });

        Schema::table('provedores_productos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_product');
            $table->foreign('id_product')->references('id')->on('productos')->onDelete('cascade');
        });
        Schema::table('provedores_productos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_provider');
            $table->foreign('id_provider')->references('id')->on('provedors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relaciones');
    }
}
