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

Route::post('login', 'LogController@store');
Route::get('logout', 'LogController@logout');

Route::resource('inv_catarticu', 'inv_catarticuController');