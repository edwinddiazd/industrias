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
Route::auth();

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

Route::get('Dashboard', ['middleware' => ['auth'], 'uses' => 'PageController@getDashboard']);

Route::get('Producto', ['middleware' => ['auth'], 'uses' => 'PageController@getProducto']);

Route::get('Brokers', 'PageController@getBroker');

Route::get('Proyeccion', 'PageController@getProyeccion');

Route::get('Exportacion', 'PageController@getExportacion');

Route::get('Alianzas', 'PageController@getAlianzas');

Route::get('Capacidads', 'RegisterController@getCapacidads');

Route::get('Solmats', 'RegisterController@getSolmats');

Route::get('Reg_Personal', 'RegisterController@getReg_Personal');

Route::get('Reg_Materias', ['middleware' => ['auth'], 'uses' => 'RegisterController@getReg_Materias']);

Route::get('Reg_Proyeccions','RegisterController@getReg_Proyeccion');

Route::get('Reg_Produccions','RegisterController@getReg_Produccion');

Route::get('Registro', 'PageController@getRegistro');

Route::get('Personals', 'ConsultasController@getConsultaPersonal');

Route::get('Presidente','ConsultasController@getConsultaPresidente');

Route::get('Ventas','ConsultasController@getConsultaVentas');

Route::get('Compras','ConsultasController@getConsultaCompras');

Route::get('Juridico','ConsultasController@getConsultaJuridico');

Route::get('Seguridad_Integral','ConsultasController@getConsultaSeguridadIntegral');

Route::get('Seguridad_Industrial','ConsultasController@getConsultaSeguridadIndustrial');

Route::get('Operaciones','ConsultasController@getConsultaOperaciones');

Route::get('Bienes','ConsultasController@getConsultaBienes');

Route::get('Comunicaciones','ConsultasController@getConsultaComunicaciones');

Route::get('Tecnologia','ConsultasController@getConsultaTecnologia');

Route::get('Gestion_Humana','ConsultasController@getConsultaGestionHumana');

Route::get('Broker_Consul','ConsultasController@getConsultaBroker_Consul');

Route::get('Productos_consul', 'ConsultasController@getConsultaProductos_consul');

Route::get('Subproduc','ConsultasController@getConsultaSubproduc');

Route::get('Semiproduc','ConsultasController@getConsultaSemiproduc');

Route::get('Terminado','ConsultasController@getConsultaTerminado');

Route::get('MateriaP','ConsultasController@getConsultaMateriP');

//rutas resource

Route::resource('Productos','ProductController');

Route::resource('Industria','IndustriaController');

Route::resource('Personal','PersonalController');

Route::resource('Materias','MateriasController');

Route::resource('Broker','BrokerController');

Route::resource('Capacidad','CapacidadController');

Route::resource('Solmat','SolmatController');

Route::resource('Proyeccion','ProyeccionController');

Route::resource('Produccion','ProduccionController');



/*Route::get('/home', 'HomeController@index');*/
