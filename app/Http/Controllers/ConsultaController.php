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
		$Pieza = \App\Pieza::find($request->get('infoadicional'));
		//dd($Inventario);
		$Inventario->cantidad=\App\Inventario::where('idpieza', $request->get('pieza'))->first()->cantidad;
		$Sucursal = \App\Sucursal::find($Inventario->idsucursal);
		$Pieza = \App\Pieza::find($Inventario->idpieza);
		//$sucursal = \App\Sucursal::find($inventario->idsucursal);
		//dd($Inventario);
		//dd($Inventario->cantidad);
		return view('consulta', compact(['Marcas','Modelo','Inventario','Sucursal','Pieza']));
	}



}