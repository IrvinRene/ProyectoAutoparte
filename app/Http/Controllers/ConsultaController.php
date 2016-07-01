<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
class ConsultaController extends Controller {


	 
	public function index()
	{
		return view('consulta');
	}

	public function postPrueba(Request $request)
	{
		//dd($request->all());
		$Marcas = \App\Marcas::find($request->get('marca'));
		//dd($Marcas);
		return view('consulta', compact('Marcas'));
	}



}