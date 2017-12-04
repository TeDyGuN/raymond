<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
//use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
//use Barryvdh\DomPDF\PDF;
//use Barryvdh\DomPDF;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Pedido;

class PedidoController extends Controller {

    public function guardarPedido(Request $request)
    {
        //'id', 'nombres', 'apellidos', 'id_tela', 'telefono', 'direccion', 'email'
        $pedido = new Pedido();
        $pedido->nombres = $request->nombres;
        $pedido->apellidos = $request->father;
        $pedido->telefono = $request->telefono;
        $pedido->direccion = $request->direccion;
        $pedido->email = $request->email;
        $pedido->id_tela = $request->tela;
        $pedido->entregado = 'NO';
        $pedido->save();

		return Redirect::back()->with(['success' => ' ']);
    }
    public function getPedido($id)
    {
        return view("pedido");
    }
	// public function getViewBuscar()
	// {
	// 	return view('Mascota/buscarMascota');
	// }
	// public function viewMascota()
	// {
    //
    //
    //
	// 	$config = array();
	// 		 $config['center'] = '-16.498134, -68.134016';
	// 		 $config['map_width'] = 'max';
	// 		 $config['map_height'] = 400;
	// 		 $config['zoom'] = 'auto';
    //
    //
	// 		 \Gmaps::initialize($config);
    //
	// 		 // Colocar el marcador
	// 		 // Una vez se conozca la posición del usuario
	// 		 $marker = array();
	// 		 $marker['position'] = '-16.498134, -68.134016';
	// 		 $marker['draggable'] = true;
	// 		 $marker['ondragend'] = 'updateDatabase(event.latLng.lat(), event.latLng.lng());';
	// 		 \Gmaps::add_marker($marker);
	// 		 $map = \Gmaps::create_map();
	// 		 $codigo = Rfid::where('uso',  "No")
	// 	               ->take(1)
	// 	               ->get();
	// 		return view('Mascota/mascota', compact("codigo", "map"));
	// }
	// public function buscarMascota()
	// {
	// 	return view('Mascota/buscarMascotaAdmin');
	// }
	// public function saveMascota(Request $request)
	// {
	// 	set_time_limit(5000);
	// 	//obtenemos el campo file definido en el formulario
	// 	$file = $request->file('archivo');
	// 	//obtenemos el nombre del archivo
	// 	$nombre = $file->getClientOriginalName();
	// 	$url = storage_path('app/').$nombre;
	// 	$messages = [
	// 		'mimes' => 'Solo se permiten Archivos .bmp, .jpg, .png',
	// 	];
	// 	$validator = Validator::make(
	// 		[
	// 			'file' => $file,
	// 			'nombre' => $nombre
	// 		],
	// 		[
	// 			'file' => 'mimes:jpeg,jpg,png'
	// 		],
	// 		$messages);
	// 	$message = 'f';
	// 	if ($validator->fails())
	// 	{
	// 		return Redirect::back()->withErrors($validator);
	// 	}
	// 	\Storage::disk('local')->put($nombre,  \File::get($file));
    //
    //
	// 	$idc = Rfid::select('id', 'codigo')
	// 	             ->where('codigo', $request->codigo)
	// 	             ->take(1)
	// 	             ->get();
	// 							 ///'fecha', 'enfermedades', 'vacunas', 'caracteristicas', 'tamanio'
	// 	$mascota = new Mascota();
	// 	$mascota->nombre = $request->nombrem;
	// 	$mascota->raza = $request->raza;
	// 	$mascota->color = $request->color;
	// 	$mascota->peso = $request->peso;
	// 	$mascota->mascota = $request->mascota;
	// 	$mascota->fecha = $request->fecha;
	// 	$mascota->enfermedades = $request->enfermedades;
	// 	$mascota->vacunas = $request->vacunas;
	// 	$mascota->caracteristicas = $request->caracteristicas;
	// 	$mascota->tamanio = $request->tamanio;
	// 	$mascota->id_rfid = $idc[0]['id'];
	// 	$mascota->esterilizado = $request->esterilizado;
	// 	$mascota->descripcion = $request->otros;
	// 	$mascota->imagen = $nombre;
	// 	$mascota->dnombre = $request->nombres;
	// 	$mascota->dapellido = $request->father;
	// 	$mascota->demail = $request->email;
	// 	$mascota->dci = $request->ci;
	// 	$mascota->direccion = $request->direccion;
	// 	$mascota->dtelefono = $request->telefono;
    //
	// 	$mascota->lat = $request->lat;
	// 	$mascota->long = $request->long;
	// 	$mascota->save();
	// 	$codigo = Rfid::find($idc[0]['id']);
	// 	$codigo->uso = "Si";
	// 	$codigo->save();
	// 	return Redirect::back()->with(['success' => ' ']);
	// }
	// public function ServiceBuscar(Request $request)
	// {
	// 	$codigo = Rfid::where('codigo',  $request->rfid)
	// 	              ->get();
	// 	if(count($codigo) > 0)
	// 	{
	// 		if($codigo[0]['uso'] == "Si"){
    //
	// 				$mascota = Mascota::where('id_rfid', $codigo[0]['id'])
	// 					->get();
	// 				$config = array();
	// 				$config['center'] = $mascota[0]->lat.','. $mascota[0]->long;
	// 				$config['zoom'] = 'auto';
	// 				\Gmaps::initialize($config);
    //
	// 				$marker = array();
	// 				$marker['position'] = $mascota[0]->lat.','. $mascota[0]->long;
	// 				\Gmaps::add_marker($marker);
	// 				$map = \Gmaps::create_map();
    //
	// 			return \view('Mascota/resultado', compact('mascota', 'map'));
	// 		}
	// 		else{
	// 			return \view('Mascota/disponibleAdmin');
	// 		}
	// 	}
	// 	else{
	// 		return \view('Mascota/inexistenteAdmin');
	// 	}
	// }
	// public function ServiceBuscarU(Request $request)
	// {
	// 	$codigo = Rfid::where('codigo',  $request->rfid)
	// 	              ->get();
	// 	if(count($codigo) > 0)
	// 	{
	// 		if($codigo[0]['uso'] == "Si"){
	// 			$mascota = Mascota::where('id_rfid', $codigo[0]['id'])
	// 				->get();
	// 			$config = array();
	// 			$config['center'] = $mascota[0]->lat.','. $mascota[0]->long;
	// 			$config['zoom'] = 'auto';
	// 			\Gmaps::initialize($config);
    //
	// 			$marker = array();
	// 			$marker['position'] = $mascota[0]->lat.','. $mascota[0]->long;
	// 			\Gmaps::add_marker($marker);
	// 			$map = \Gmaps::create_map();
    //
	// 			return \view('Mascota/resultadoMascota', compact('mascota', 'map'));
	// 		}
	// 		else{
	// 			return \view('Mascota/disponible');
	// 		}
	// 	}
	// 	else{
	// 		return \view('Mascota/inexistente');
	// 	}
	// }
	// public function APIBuscar(Request $request)
	// {
	// 	$message1 = ["message" => "101"];
	// 	$message2 = ["message" => "404"];
    //
	// 	$codigo = Rfid::where('codigo',  $request->codigo)
	// 	              ->get();
	// 	if(count($codigo) > 0)
	// 	{
    //
	// 		if($codigo[0]['uso'] == "Si"){
	// 			$mascota = Mascota::where('id_rfid', $codigo[0]['id'])
	// 			                  ->get();
    //
    //
	// 			$message3 = ["message" => "200", "mascota"=> $mascota];
	// 			return json_encode($message3) ;
	// 		}
	// 		else{
	// 			return json_encode($message2) ;
	// 		}
	// 	}
	// 	else{
	// 		return json_encode($message1) ;
	// 	}
    //
	// }
}
