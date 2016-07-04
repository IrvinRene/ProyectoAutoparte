<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Reportegrl as Reportegrl;

class ReportegrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reportegrl = new Reportegrl;
        $parametros['ruta']             = ['route' => 'reportegrl.store', 'class' => 'form-horizontal'];
        $parametros['metodo']       = 'POST';
        $parametros['cantidad ']        =  '';
        $parametros['idpieza']        =  '';
        $parametros['idsucursal']        =  '';
        $parametros['button']       = 'Registrar';
        
        if($request->input('reportegrl1') != ""){
            $rpg = Reportegrl::rpgl($request->get('reportegrl1'))->paginate(10);
           
        }
        else{
            $rpg = Reportegrl::paginate(10);
        }
       
        return view('reportegrl', compact(['parametros', 'reportegrl', 'rpg']));
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
        $reportegrl = new Reportegrl;
        $reportegrl->cantidad                   = $request->input('cantidad');
        $reportegrl->idpieza                   = $request->input('idpieza');
        $reportegrl->idsucursal                   = $request->input('idsucursal');
    
        $reportegrl->save();
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
        $reportegrl = Reportegrl::find($id);
        $rpg = Reportegrl::find($id)->paginate(10);
        $parametros['ruta']             = ['route' => ['reportegrl.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        $parametros['cantidad']            = $reportegrl->cantidad;
        $parametros['idpieza']            = $reportegrl->idpieza;
        $parametros['idsucursal']            = $reportegrl->idsucursal;
        $parametros['button']           = 'Editar';


        
        return view('reportegrl', compact(['parametros', 'reportegrl','rpg']));
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
         $reportegrl = Reportegrl::find($id);
     
        $reportegrl->cantidad                   = $request->input('cantidad');
        $reportegrl->idpieza                   = $request->input('idpieza');
        $reportegrl->idsucursal                   = $request->input('idsucursal');
        $reportegrl->save();
        return \Redirect::route('reportegrl.index');
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
