<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pieza as Pieza;
class PiezaController extends Controller {

    

    /**
     * Display a listing of the resource.
     *
     * @return Respone
     */
    public function index(Request $request)
    {
        //return view('Pieza');
        $pieza = new Pieza;
        $parametros['ruta']             = ['route' => 'pieza.store', 'class' => 'form-horizontal'];
        $parametros['metodo']       = 'POST';
        $parametros['pieza']        =  '';
        $parametros['serie']        =  '';
        $parametros['marca']        =  '';
        $parametros['infoadicional']    =  '';
        $parametros['idsucursal']   =  '';
        $parametros['idmodelo']     =  '';
        $parametros['imagen']     =  '';
        $parametros['button']       = 'Registrar';
        
        if($request->input('pieza1') != ""){
            $pz = Pieza::pza($request->get('pieza1'))->paginate(10);
        }
        else{
            $pz = Pieza::paginate(10);
        }
       
        return view('pieza', compact(['parametros', 'pieza', 'pz']));
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

        $pieza = new Pieza;
        $pieza->pieza                   = $request->input('pieza');
        $pieza->serie                   = $request->input('serie');
        $pieza->marca                   = $request->input('marca');
        $pieza->infoadicional                   = $request->input('infoadicional');
        $pieza->idsucursal                  = $request->input('idsucursal');
        $pieza->idmodelo                    = $request->input('idmodelo');
        $imagen= $request->file('imagen');
        $imagenName=$_FILES['imagen']['name'];
        \Storage::disk('local')->put($imagenName, \File::get($imagen));
        $pieza->imagen=$imagenName;
        $pieza->save();
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
    public function edit(Request $request,$id)
    {        
        
        $pieza = Pieza::find($id);
        $pz = Pieza::find($id)->paginate(10);
        $parametros['ruta']             = ['route' => ['pieza.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        $parametros['pieza']            = $pieza->pieza;
        $parametros['serie']            = $pieza->serie;
        $parametros['marca']            = $pieza->marca;
        $parametros['infoadicional']            = $pieza->infoadicional;
        $parametros['idsucursal']           = $pieza->idsucursal;
        $parametros['idmodelo']             = $pieza->idmodelo;
        $parametros['button']           = 'Editar';


        
        return view('pieza', compact(['parametros', 'pieza','pz']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
       
        $pieza = Pieza::find($id);
     
        $pieza->pieza                   = $request->input('pieza');
        $pieza->serie                   = $request->input('serie');
        $pieza->marca                   = $request->input('marca');
        $pieza->infoadicional                   = $request->input('infoadicional');
        $pieza->idsucursal                  = $request->input('idsucursal');
        $pieza->idmodelo                    = $request->input('idmodelo');
        $pieza->save();
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
        $pieza = Marcas::find($id);
        $pieza -> delete();
        

         return \Redirect::route('pieza.index');
    }
}


