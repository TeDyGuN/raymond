<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/disenia', function () {
    return view('disenio');
});

Route::get('/pedido/{id}', 'PedidoController@getPedido');

Route::post('/pedido/save', 'PedidoController@guardarPedido');

//CALENDARIO
Route::group(['prefix'=> 'admin031217', 'namespace' => 'Admin'], function() {
    Route::get('/admin', function () {
        return view('Admin.admin');
    });
    Route::Resource('pedidos', 'GestionUsuarioController');
    Route::get('/reportes/pedidos', function() {
        return view('Admin.reportesPedidos');
    });

    Route::get('/reportes/pedido1', 'ReportesController@pedidos1');
    Route::get('/reportes/pedido2', 'ReportesController@pedidos2');
    Route::get('/reportes/pedido3', 'ReportesController@pedidos3');
});
