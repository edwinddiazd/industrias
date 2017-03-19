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

//autenticacion

Route::get('auth/login','Auth\AuthController@getLogin');

Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/logout','Auth\AuthController@getLogout');

//registro

Route::get('auth/register','Auth\AuthController@getRegister');

Route::post('auth/register','Auth\AuthController@postRegister');

//vistas infinitas

Route::get('Reg_Personal', 'PageController@getReg_Personal');

Route::get('Producto', 'PageController@getProducto');

Route::get('Aliados', 'PageController@getAliados');

Route::get('Broker', 'PageController@getBroker');

Route::get('Proyeccion', 'PageController@getProyeccion');

Route::get('Exportacion', 'PageController@getExportacion');

Route::get('Alianzas', 'PageController@getAlianzas');

Route::resource('Productos','ProductController');

Route::resource('Industria','IndustriaController');

Route::resource('Personal','PersonalController');

Route::resource('Consulta','PageController@getConsulta');

Route::get('Consulta_Personal', 'PageController@getConsultaPersonal');

Route::get('Registro', 'PageController@getRegistro');

Route::get('Consulta_Presidente','PageController@getConsultaPresidente');

Route::get('Consulta_Ventas','PageController@getConsultaVentas');

Route::get('Consulta_Compras','PageController@getConsultaCompras');

Route::get('Consulta_Juridico','PageController@getConsultaJuridico');

Route::get('Consulta_SeguridadIntegral','PageController@getConsultaSeguridadIntegral');

Route::get('Consulta_SeguridadIndustrial','PageController@getConsultaSeguridadIndustrial');

Route::get('Consulta_Operaciones','PageController@getConsultaOperaciones');

Route::get('Consulta_Bienes','PageController@getConsultaBienes');

Route::get('Consulta_Comunicaciones','PageController@getConsultaComunicaciones');

Route::get('Consulta_Tecnologia','PageController@getConsultaTecnologia');

Route::get('Consulta_Gestion_Humana','PageController@getConsultaGestionHumana');
Route::auth();

Route::get('/home', 'HomeController@index');
