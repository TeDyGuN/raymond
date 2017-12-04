<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
	        $table->integer('id_tela')->unsigned()->nullable();
	        $table->foreign('id_tela')->references('id')->on('telas');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->string('entregado');
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
        Schema::drop('pedidos');
    }
}
