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

Route::get('/', function () {
    return view('login');
});

Route::get('/admin', ['middleware' => 'auth', function () {
    //
    //validar tipo de usuario y extraer url del home
	$data['urlActual']= 'administracion.administrador.home';


    return view('dashboard.index',$data);
}]); 

Route::post('/login', 'LogController@store');
Route::get('/logout', 'LogController@logout');

Route::resource('/inv_catarticu', 'inv_catarticuController');
Route::resource('inv_prevenart', 'inv_prevenartController');
Route::resource('inv_bodegas', 'inv_bodegasController');
Route::resource('inv_controlart', 'inv_controlartController');
Route::resource('inv_almacenes', 'inv_almacenesController');
Route::resource('inv_zonas', 'inv_zonasController');
Route::resource('inv_vendedor', 'inv_vendedorController');
Route::resource('inv_sucursales', 'inv_sucursalesController');
Route::resource('inv_ciudades', 'inv_ciudadesController');
Route::resource('inv_departamento', 'inv_departamentoController');
Route::resource('inv_documentos', 'inv_documentosController');
Route::resource('inv_formpagos', 'inv_formpagosController');
Route::resource('inv_combosart', 'inv_combosartController');
Route::resource('inv_imptoart', 'inv_imptoartController');
Route::resource('inv_unidarti', 'inv_unidartiController');
Route::resource('inv_articulos', 'inv_articulosController');
Route::resource('inv_tercero', 'inv_terceroController');
Route::resource('inv_encfactura', 'inv_encfacturaController');
Route::resource('inv_detfactura', 'inv_detfacturaController');