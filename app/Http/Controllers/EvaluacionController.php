<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evaluacion as Evaluacion;
class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $evaluacion = new Evaluacion;
        $parametros['ruta']             = ['route' => 'evaluacion.store', 'class' => 'form-horizontal'];
        $parametros['metodo']       = 'POST';
        $parametros['idopcion']        =  '';
        $parametros['comentario']        =  '';
        $parametros['idsucursal']        =  '';
        $parametros['button']       = 'Registrar';
        
        
    
    
       
        return view('evaluacion', compact(['parametros', 'evaluacion']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluacion = new Evaluacion;
        
        $evaluacion->idopcion           = $request->input('idopcion');
        $evaluacion->idsucursal         = $request->input('idsucursal');
        $evaluacion->comentario          = $request->input('comentario');
        $evaluacion->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $evaluacion = Evaluacion::find($id);
        
        $parametros['ruta']             = ['route' => ['evaluacion.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        $parametros['idopcion']            = $evaluacion->idopcion;
        $parametros['idsucursal']            = $evaluacion->idsucursal;
        $parametros['comentario']            = $evaluacion->comentario;
        $parametros['button']           = 'Editar';

        return view('evaluacion', compact(['evaluacion', 'parametros']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $evaluacion = Evaluacion::find($id);
       
        $evaluacion->idopcion           = $request->input('idopcion');
        $evaluacion->idsucursal         = $request->input('idsucursal');
        $evaluacion->comentario          = $request->input('comentario');
        $evaluacion->save();
        return \Redirect::route('evaluacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
