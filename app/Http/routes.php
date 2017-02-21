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


Route::get('/', 'PageController@getIndex');

Route::get('Personal', 'PageController@getPersonal');

Route::get('Producto', 'PageController@getProducto');

Route::get('Alianzas', 'PageController@getAlianzas');

Route::get('Broker', 'PageController@getBroker');

Route::get('Proyeccion', 'PageController@getProyeccion');

Route::get('Exportacion', 'PageController@getExportacion');

Route::get('Intercambios', 'PageController@getIntercambios');

