<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Inventario as Inventario;
use App\Modelo  as Modelo;
use App\Marcas as Marcas;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      

        $inventario = new Inventario;
        $parametros['ruta']             = ['route' => 'inventario.store', 'class' => 'form-horizontal'];
        $parametros['metodo']       = 'POST';
        $parametros['cantidad ']        =  '';
        $parametros['idpieza']        =  '';
        $parametros['idsucursal']        =  '';
        $parametros['button']       = 'Registrar';
        
        if($request->input('inventario1') != ""){
            $inv = Inventario::invt($request->get('inventario1'))->paginate(10);
        }
        else{
            $inv = Inventario::paginate(10);
        }
    if($request->input('id1') != ""){
            $mrk = Marcas::mda($request->get('id1'));
        }
       

  
        $marcas = new Marcas;
        $parametros['ruta']             = ['route' => 'inventario.store', 'class' => 'form-horizontal'];
        $parametros['metodo']       = 'POST';
        $parametros['id']           ='';
        $parametros['marca']        ='';
        
         


        $modelo = new Modelo;
        $parametros['ruta']             = ['route' => 'inventario.store', 'class' => 'form-horizontal'];
        $parametros['metodo']       = 'POST';
        $parametros['id']           ='';
        $parametros['modelos']        ='';
        $parametros['idmarca']          ='';


            
        return view('inventario', compact(['parametros', 'inventario', 'inv', 'marca',' mrk', 'modelos', 'idmarca']));

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

        
        $inventario = new Inventario;
        $inventario->cantidad                   = $request->input('cantidad');
        $inventario->idpieza                   = $request->input('idpieza');
        $inventario->idsucursal                   = $request->input('idsucursal');
    
        $inventario->save();

        $marcas = new Marcas;
        $marcas->id                 =$request->input('id');
        $marcas->marca              =$request->input('marca');

        $marca->save();

        $modelo = new Modelo;
        $modelos->id                =$request->input('id');
        $modelos->modelo            =$request->input('modelo');
        $modelos->idmarca           =$request->input('idmarca');

        $modelos->save();



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
    public function edit(Request $request, $id)
    {
        $inventario = Inventario::find($id);
        $inv = Inventario::find($id)->paginate(10);
        $parametros['ruta']             = ['route' => ['inventario.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        $parametros['cantidad']            = $inventario->cantidad;
        $parametros['idpieza']            = $inventario->idpieza;
        $parametros['idsucursal']            = $inventario->idsucursal;
        $parametros['button']           = 'Editar';


        
        return view('inventario', compact(['parametros', 'inventario','inv']));
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
         $inventario = Inventario::find($id);
     
        $inventario->cantidad                   = $request->input('cantidad');
        $inventario->idpieza                   = $request->input('idpieza');
        $inventario->idsucursal                   = $request->input('idsucursal');
        $inventario->save();
        return \Redirect::route('inventario.index');
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
