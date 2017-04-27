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
Route::group(['prefix' => 'dios'], function () {
        Route::controller('roles', 'RolesController');
        Route::controller('permissions', 'PermissionsController');
        Route::controller('users', 'UsersController');
    });

Route::get('auth/login','Auth\AuthController@getLogin');

Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/logout','Auth\AuthController@getLogout');

//registro

Route::get('auth/register','Auth\AuthController@getRegister');

Route::post('auth/register','Auth\AuthController@postRegister');

//vistas infinitas

Route::get('Reg_Personal', 'PageController@getReg_Personal');

Route::get('Reg_Materias', ['middleware' => ['auth'], 'uses' => 'PageController@getReg_Materias']);

Route::get('Dashboard', ['middleware' => ['auth'], 'uses' => 'PageController@getDashboard']);

Route::get('Producto', ['middleware' => ['auth'], 'uses' => 'PageController@getProducto']);

Route::get('Aliados', 'PageController@getAliados');

Route::get('Brokers', 'PageController@getBroker');

Route::get('Proyeccion', 'PageController@getProyeccion');

Route::get('Exportacion', 'PageController@getExportacion');

Route::get('Alianzas', 'PageController@getAlianzas');

Route::get('Capacidads', 'PageController@getCapacidads');

Route::get('Solmats', 'PageController@getSolmats');

Route::get('Reg_Proyeccions','PageController@getReg_Proyeccion');

Route::resource('Productos','ProductController');

Route::resource('Industria','IndustriaController');

Route::resource('Personal','PersonalController');

Route::resource('Materias','MateriasController');

Route::resource('Broker','BrokerController');

Route::resource('Capacidad','CapacidadController');

Route::resource('Solmat','SolmatController');

Route::resource('Reg_Proyeccion','ProyeccionController');

Route::get('Personal', 'PageController@getConsultaPersonal');

Route::get('Registro', 'PageController@getRegistro');

Route::get('Presidente','PageController@getConsultaPresidente');

Route::get('Ventas','PageController@getConsultaVentas');

Route::get('Compras','PageController@getConsultaCompras');

Route::get('Juridico','PageController@getConsultaJuridico');

Route::get('Seguridad_Integral','PageController@getConsultaSeguridadIntegral');

Route::get('Seguridad_Industrial','PageController@getConsultaSeguridadIndustrial');

Route::get('Operaciones','PageController@getConsultaOperaciones');

Route::get('Bienes','PageController@getConsultaBienes');

Route::get('Comunicaciones','PageController@getConsultaComunicaciones');

Route::get('Tecnologia','PageController@getConsultaTecnologia');

Route::get('Gestion_Humana','PageController@getConsultaGestionHumana');

Route::get('Broker_Consul','PageController@getConsultaBroker_Consul');

Route::auth();

/*Route::get('/home', 'HomeController@index');*/
