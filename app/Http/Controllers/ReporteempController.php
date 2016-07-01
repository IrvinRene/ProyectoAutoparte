<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Reporteemp as Reporteemp;

class ReporteempController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reporteemp = new Reporteemp;
        $parametros['ruta']             = ['route' => 'reporteemp.store', 'class' => 'form-horizontal'];
        $parametros['metodo']       = 'POST';
        $parametros['cantidad ']        =  '';
        $parametros['idpieza']        =  '';
        $parametros['idsucursal']        =  '';
        $parametros['button']       = 'Registrar';
        
        if($request->input('reporteemp') != ""){
            $repemp = Reporteemp::reptemp($request->get('reporteemp1'))->paginate(10);
        }
        else{
            $repemp = Reporteemp::paginate(10);
        }
       
        return view('reporteemp', compact(['parametros', 'reporteemp', 'repemp']));
    
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
        $reporteemp = new Reporteemp;
        $reporteemp->cantidad                   = $request->input('cantidad');
        $reporteemp->idpieza                   = $request->input('idpieza');
        $reporteemp->idsucursal                   = $request->input('idsucursal');
    
        $reporteemp->save();
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
        $reporteemp = Reporteemp::find($id);
        $repemp = Reporteemp::find($id)->paginate(10);
        $parametros['ruta']             = ['route' => ['reporteemp.update', $id], 'method' => 'patch', 'class' => 'form-horizontal'];
        $parametros['cantidad']            = $reporteemp->cantidad;
        $parametros['idpieza']            = $reporteemp->idpieza;
        $parametros['idsucursal']            = $reporteemp->idsucursal;
        $parametros['button']           = 'Editar';


        
        return view('reporteemp', compact(['parametros', 'reporteemp','repemp']));
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
        $reporteemp = Reporteemp::find($id);
     
        $reporteemp->cantidad                   = $request->input('cantidad');
        $reporteemp->idpieza                   = $request->input('idpieza');
        $reporteemp->idsucursal                   = $request->input('idsucursal');
        $reporteemp->save();
        return \Redirect::route('reporteemp.index');
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
