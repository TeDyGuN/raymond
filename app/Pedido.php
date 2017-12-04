<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /*
    $table->increments('id');
    $table->string('nombres');
    $table->string('apellidos');
    $table->integer('id_tela')->unsigned()->nullable();
    $table->foreign('id_tela')->references('id')->on('telas');
    $table->string('telefono');
    $table->string('direccion');
    $table->string('email');
    */
    protected $table = 'pedidos';

    protected $fillable = [
        'id', 'nombres', 'apellidos', 'id_tela', 'telefono', 'direccion', 'email', 'entregado'
    ];
}
