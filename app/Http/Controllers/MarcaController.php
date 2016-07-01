<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Marcas as Marcas;
class MarcaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$marca = new Marcas;
		$parametros['ruta'] 			= ['route' => 'marca.store', 'class' => 'form-horizontal'];
		$parametros['metodo'] 			= 'POST';
		$parametros['marca'] 			=  '';

		 if($request->input('marca') != ""){
             $marca = Marca::paginate(10);
        }
        else{
        }

		return view('marca', compact(['marca', 'parametros']));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$marca = new Marcas;
		
		$marca->marca			= $request->input('marca');
		
		$marca->save();
		
		return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		  
        // $marcas = marcas::find($id);
        // // $pz = Pieza::find($id)->paginate(10);
        // $parametros['ruta']             = ['route' => ['marca.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        // $parametros['marca']            = $marcas->marca;
       
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
   // $marcas = Marcas::find($id);
     
  //       $marcas->marcas                 = $request->input('marcas');
  //       $pieza->serie                   = $request->input('serie');
  //       $pieza->marca                   = $request->input('marca');
  //       $pieza->infoadicional                   = $request->input('infoadicional');
  //       $pieza->idsucursal                  = $request->input('idsucursal');
  //       $pieza->idmodelo                    = $request->input('idmodelo');
  //       $pieza->save();
  //       return \Redirect::route('pieza.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// User::destroy($id);
  //       return \Redirect::route('marca.index');
	}

}
