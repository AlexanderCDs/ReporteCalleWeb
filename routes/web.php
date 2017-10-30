<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'GeneralController@index');

//Si esta en la misma direccioón pones el nombre del archivo y la funcion del controlador
Route::get('modulo', 'GeneralController@iniciar_sesion');

Route::get('usuarios/registro', 'GeneralController@registro');

Route::get('reportes/crear', 'GeneralController@crear_reporte');

Route::get('reportes/pendientes', 'GeneralController@reporte_pendiente');

Route::get('reportes/aprovados', 'GeneralController@reportes_aprovados');

Route::get('reportes/nuevos', 'GeneralController@reportes_nuevos');

Route::get('estadisticas/crear', 'GeneralController@crear_estadistica');

//Route::get('seguimientos/crear', 'GeneralController@crear_seguimiento');

Route::resource('/', 'LoginController');

Route::resource('/reportes', 'ReporteController');

Route::resource('/usuarios', 'UsuarioController');

Route::resource('/estadisticas', 'EstadisticaController');

Route::resource('/seguimientos', 'SeguimientoController');

Route::resource('/recuperacion', 'ForgotPasswordController'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
