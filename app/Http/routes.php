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

/*Route::get('/', function () {
    return view('fundation');
});*/
Route::get('/',function(){
	return view('fundation');
});

Route::get('acerca','PaginasController@acerca');

// Rutas tradicionales de hacer
/*
Route::get('articulos','ArticulosController@index');

Route::get('articulos/crear','ArticulosController@create');

Route::get('articulos/{id}','ArticulosController@show');

Route::post('articulos','ArticulosController@store');
*/

//Nueva forma de crear las rutas (creamos los demas metodos de edit, delete, update)
Route::resource('articulos','ArticulosController');