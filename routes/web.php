<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('usuarios', 'UsuariosController@index');






Route::group(['middleware' => 'web'], function () {
	Route::get('/', 'HomeController@index');
	
	Route::auth();
	
	Route::get('/home', 'HomeController@index');
	
	
	Route::get('clientes', 'ClientesController@index');
	Route::get('clientes/novo', 'ClientesController@novo');
	
	Route::get('clientes/{cliente}/editar', 'ClientesController@editar');
	
	Route::post('clientes/salvar', 'ClientesController@salvar');
	Route::patch('clientes/{cliente}', 'ClientesController@atualizar');
	Route::delete('clientes/{cliente}', 'ClientesController@deletar');
	
	

	

});

