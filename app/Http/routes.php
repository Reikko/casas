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
    return view('welcome');
});

Route::get('des/estado/{id}','EdoControl@getCiudades');
Route::get('calle/desa/{id}','CdadControl@getDesarrollo');

Route::resource('des','DesControl');
Route::resource('edo','EdoControl');
Route::resource('cdad','CdadControl');
Route::resource('calle','CalleControl');
Route::resource('client','ClienteControl');
Route::resource('propiedad','PropiedadControl');
Route::resource('trabajador','TrabControl');
Route::resource('unidad','UnidadControl');
Route::resource('login','UserControl');

//Obtener el desarrollo y darlo de alta en el mismo desarrollo
Route::get('calle/create/{id}','CalleControl@getDesarrollo');
Route::post('calle/create/{id}', 'CalleControl@store2');


//Ruta para generar el pdf
Route::get('trabajador/obt/pdf/{nombre}','TrabControl@postPdf');
//Route::post('obt/pdf','TrabControl@postPdf');

Route::auth();
Route::get('/home', 'HomeController@index');


