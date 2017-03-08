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

Route::get('Reg_Personal', 'PageController@getReg_Personal');

Route::get('Producto', 'PageController@getProducto');

Route::get('Aliados', 'PageController@getAliados');

Route::get('Broker', 'PageController@getBroker');

Route::get('Proyeccion', 'PageController@getProyeccion');

Route::get('Exportacion', 'PageController@getExportacion');

Route::get('Alianzas', 'PageController@getAlianzas');

Route::get('Registro_Industrias', 'PageController@getRegistroIndustrias');

Route::resource('Productos','ProductController');

Route::resource('Industria','IndustriaController');

Route::resource('Personal','PersonalController');

Route::resource('Consulta','PageController@getConsulta');

Route::resource('Consulta_Presidente','PageController@getConsulta_Presidente');
