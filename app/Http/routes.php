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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'FrontController@index');
Route::get('principal', 'FrontController@principal');

//controladores RESTful

Route::resource('login','LoginController');
Route::get('logout','LoginController@logout');
Route::resource('usuario', 'UsuarioController');
Route::resource('genero', 'GeneroController');
Route::resource('ciudad', 'CiudadController');
Route::resource('tipo', 'TipoController');

Route::resource('lugar','LugarController');
Route::resource('estadoAudiencia','EstadoAudienciaController');