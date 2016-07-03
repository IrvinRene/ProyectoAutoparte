<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
class ConsultaController extends Controller {


	 
	public function index()
	{
		return view('consulta');
	}

	public function postResultado(Request $request)
	{
		//dd($request->all());
		$Marcas = \App\Marcas::find($request->get('marca'));
		$Modelo = \App\Modelo::find($request->get('modelo'));
		$Inventario = \App\Inventario::find($request->get('pieza'));
		//dd($Inventario);
		$Inventario->cantidad=\App\Inventario::where('idpieza', $request->get('pieza'))->first()->cantidad;
		$Sucursal = \App\Sucursal::find($Inventario->idsucursal);
		//$sucursal = \App\Sucursal::find($inventario->idsucursal);
		//dd($Inventario);
		//dd($Inventario->cantidad);
		return view('consulta', compact(['Marcas','Modelo','Inventario','Sucursal']));
	}



}