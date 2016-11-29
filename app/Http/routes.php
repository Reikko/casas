<?php
//Rutas unicas para mostrar vistas
Route::get('/', function () {
    return view('auth.login');
});
Route::get('nuevas/select','CasaControl@select');       //Seleccion entre una o varias casas
Route::get('nuevas/cp','CasaControl@cp');               //Envia el codigo postal
//------------------------------------------------//

//Utilizada para el cambio de estado al crear
Route::get('des/estado/{id}','EdoControl@getCiudades');
Route::get('des/{n}/estado/{id}','EdoControl@getEditCiudades');
//
//Route::get('calle/desa/{id}','CdadControl@getDesarrollo');

Route::resource('des','DesControl');
Route::resource('edo','EdoControl');
Route::resource('cdad','CdadControl');
Route::resource('calle','CalleControl');        //Crear calles del nuevo desarrollo
Route::resource('client','ClienteControl');
Route::resource('propiedad','PropiedadControl');
Route::resource('trabajador','TrabControl');    //Trabajador
Route::resource('unidad','UnidadControl');      //
Route::resource('nuevas','CasaControl');        //Registro de nuevas casas
Route::resource('una','UnaControl');
Route::resource('varias','VariasControl');
Route::resource('inquilino','InquilinoControl');

//Obtener el desarrollo y darlo de alta en el mismo desarrollo
Route::get('calle/create/{id}','CalleControl@getDesarrollo');
Route::post('calle/create/{id}', 'CalleControl@store2');


//Ruta para generar el pdf
Route::get('trabajador/obt/pdf/{nombre}/{app}/{apm}/{puesto}','TrabControl@getPdf');
//-------------------------------------------------------------------------------------//

Route::auth();

//---------------------------Rutas para Los accesos de usuarios
Route::get('/user/login','UserControl@showLoginForm');
Route::post('/user/login','UserControl@login');
//-------------------------------------------------------------//


//-----------------Ruta para El codigo Postal--------------//
//Route::get('una/cp/{id}','Unacontrol@getDireccion');
Route::post('una/cp','UnaControl@showDireccion');
//---------------------------------------------------------//


Route::get('/home', 'HomeController@index');
//Route::get('/home', 'UserControl@index');



































