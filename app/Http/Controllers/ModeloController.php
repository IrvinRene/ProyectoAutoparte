<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Modelo as Modelo;
class ModeloController extends Controller {

    

    /**
     * Display a listing of the resource.
     *
     * @return Respone
     */
    public function index(Request $request)
    {
        //return view('Pieza');
        $modelo = new Modelo;
        $parametros['ruta']             = ['route' => 'modelo.store', 'class' => 'form-horizontal'];
        $parametros['metodo']       = 'POST';
        $parametros['modelo']        =  '';
        $parametros['idmarca']        =  '';
        $parametros['idagno']        =  '';
        $parametros['idmotor']    =  '';
        $parametros['button']       = 'Registrar';
        
        if($request->input('modelo1') != ""){
            $md = Modelo::mda($request->get('modelo1'))->paginate(10);
        }
        else{
            $md = Modelo::paginate(10);
        }
       
        return view('modelo', compact(['parametros', 'modelo', 'md']));
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

        $modelo = new Modelo;
        $modelo->modelo                   = $request->input('modelo');
        $modelo->idmarca                   = $request->input('idmarca');
        $modelo->idagno                   = $request->input('idagno');
        $modelo->idmotor                   = $request->input('idmotor');

        $modelo->save();
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
        
        $modelo = Modelo::find($id);
        $md = Modelo::find($id)->paginate(10);
        $parametros['ruta']             = ['route' => ['modelo.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        $parametros['modelo']            = $modelo->modelo;
        $parametros['idmarca']            = $modelo->idmarca;
        $parametros['idagno']            = $modelo->idagno;
        $parametros['idmotor']            = $modelo->idmotor;
        $parametros['button']           = 'Editar';


        
        return view('modelo', compact(['parametros', 'modelo','md']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
       
        $modelo = Modelo::find($id);
     
        $modelo->modelo                   = $request->input('modelo');
        $modelo->idmarca                   = $request->input('idmarca');
        $modelo->idagno                   = $request->input('idagno');
        $modelo->idmotor                   = $request->input('idmotor');
        $modelo->save();
        return \Redirect::route('modelo.index');
        
        
        
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
