<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@index'); //JARLEY
Route::get('nosotros', 'FrontController@nosotros'); //JARLEY
Route::get('consulta', 'ConsultaController@index'); //LIBNY
Route::resource('marca', 'MarcaController');//IRVIN
Route::resource('pieza', 'PiezaController');//Sandra
Route::resource('piezaedit', 'PiezaeditController');//Sandra
Route::resource('modelo', 'ModeloController');// Alex
Route::resource('inventario', 'InventarioController');//Lukita
Route::resource('reporteemp', 'ReporteempController');//Lukita
Route::resource('sucursal', 'SucursalController');//Willian
Route::get('imagen',['as'=>'imagen','uses'=>'PiezaController@getImagen']);//Sandra
Route::resource('evaluacion', 'EvaluacionController');//Mc
Route::resource('reportegrl', 'ReportegrlController');//Kevin
Route::post('almacenar-imagen',['as'=>'store_imagen','uses'=>'PiezaController@storeImagen']);//Sandra
//Anais esta parte creo que te sirve a ti
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',]);
Route::post('Resultado', ['uses' => 'ConsultaController@postResultado']);


