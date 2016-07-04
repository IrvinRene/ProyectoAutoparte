<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pieza as Pieza;
class PiezaeditController extends Controller {

    

    /**
     * Display a listing of the resource.
     *
     * @return Respone
     */
    public function index()
    {
    
       
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
    public function store()
    {

    
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
    public function edit(Request $request,$id)
    {        
        
        $piezaedit = Pieza::find($id);
        $parametros['ruta']             = ['route' => ['pieza.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        $parametros['pieza']            = $piezaedit->pieza;
        $parametros['serie']            = $piezaedit->serie;
        $parametros['marca']            = $piezaedit->marca;
        $parametros['infoadicional']            = $piezaedit->infoadicional;
        $parametros['idsucursal']           = $piezaedit->idsucursal;
        $parametros['idmodelo']             = $piezaedit->idmodelo;
        $parametros['imagen']             = $piezaedit->imagen;
        $parametros['button']           = 'Editar';


        
        return view('piezaedit', compact(['parametros', 'piezaedit']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
       
        $piezaedit = Pieza::find($id);
     
        $piezaedit->pieza                   = $request->input('pieza');
        $piezaedit->serie                   = $request->input('serie');
        $piezaedit->marca                   = $request->input('marca');
        $piezaedit->infoadicional                   = $request->input('infoadicional');
        $piezaedit->idsucursal                  = $request->input('idsucursal');
        $piezaedit->idmodelo                    = $request->input('idmodelo');
        $imagen= $request->file('imagen');
        $imagenName=$_FILES['imagen']['name'];
        \Storage::disk('local')->put($imagenName, \File::get($imagen));
        $piezaedit->imagen                  =$imagenName;
        $piezaedit->save();
        return \Redirect::route('pieza.index');
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        
      /*  Record::destroy($id);
        return \Redirect::route('noticia.index');*/
    }
}


