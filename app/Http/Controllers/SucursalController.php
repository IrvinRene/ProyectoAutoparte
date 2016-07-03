<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sucursal as Sucursal;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursal = new Sucursal;
        $parametros['ruta'] = ['route' => 'sucursal.store', 'class' => 'form-horizontal'];
        $parametros['metodo'] = 'POST';
        $parametros['sucursal'] =  '';

         

        return view('sucursal', compact(['sucursal', 'parametros'])); 
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
        $sucursal = new Sucursal;
        
        $sucursal->sucursal = $request->input('sucursal');
        
        $sucursal->save();
        
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
        $sucursal = Sucursal::find($id);
        
        $parametros['ruta'] = ['route' => ['sucursal.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        $parametros['sucursal'] = $sucursal->sucursal;
        $parametros['button'] = 'Editar';


        
        return view('sucursal', compact(['sucursal', 'parametros']));
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
        $sucursal = Sucursal::find($id);
        $sucursal->sucursal = $request->input('sucursal');
        $sucursal->save();
        return \Redirect::route('sucursal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::find($id);
        $sucursal -> delete();

        return \Redirect::route('sucursal.index');
    }
}
