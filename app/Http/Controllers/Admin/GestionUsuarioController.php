<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pedido;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GestionUsuarioController extends Controller
{
    public function index()
    {
        $users = Pedido::paginate();
        return view('Admin.pedidos', compact('users'));
    }
    public function save()
    {


    }
    public function create($kardex, $email)
    {
    }
    public function store()
    {

    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {

    }
    public function update($id)
    {
        $flight = Pedido::find($id);
        $flight->entregado = 'Si';
        $flight->save();

        $message = 'Se modifico el pedido de nuestros registros';
        return $message;
    }
    public function destroy($id)
    {
        $flight = Pedido::find($id);
        $flight->delete();

        $message = 'Se Elimino el pedido de nuestros registros';
        return $message;
    }
}
