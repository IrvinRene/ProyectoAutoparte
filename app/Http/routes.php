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
Route::resource('modelo', 'ModeloController');// Alex
Route::resource('inventario', 'InventarioController');//Lukita
Route::resource('reporteemp', 'ReporteempController');//Lukita
//Anais esta parte creo que te sirve a ti
Route::resource('sucursal', 'SucursalController');//Willian

Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',]);
Route::post('Resultado', ['uses' => 'ConsultaController@postResultado']);


