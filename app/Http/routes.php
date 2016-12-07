<?php
//Rutas unicas para mostrar vistas
Route::get('/', function () {
    return view('home');
});

Route::get('enviar', function () {
    Mail::send('Emails.emails' ,[],function ($message){
        $message->from('admin@administrador.com', 'Administrador de la pagina AZF');
        $message->to('criszavalacano@gmail.com','Cristobal Zavala')->subject('Recibiste este correo por que el administrador lo mando');
    });

    return "Ya se envio el correo";
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
Route::resource('una','UnaControl');            //Registro de solo una nueva propiedad
Route::resource('varias','VariasControl');      //Registro d varias propiedades
Route::resource('inquilino','InquilinoControl');//
Route::resource('cuota','CuotaControl');        //Registro de cuotas //Servicio, Mantenimiento...etc
Route::resource('periodo','PeriodoControl');    //Registro de periodos // Diario, Semanal etc...
Route::resource('email','MailController');        //Utiliza para enviar correos de prueba

Route::get('/email/enviar','MailController@enviar');        //Utiliza para enviar correos de prueba


//Obtener el desarrollo y darlo de alta en el mismo desarrollo
Route::get('calle/create/{id}','CalleControl@getDesarrollo');
Route::post('calle/create/{id}', 'CalleControl@store2');
//

//Obtener el id de la propiedad y crear sus cuotas
Route::get('cuota/create/{id}','CuotaControl@getCuota');
//



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

//Ruta para generar el pdf
Route::get('trabajador/obt/pdf/{nombre}/{app}/{apm}/{puesto}','TrabControl@getPdf');
//-------------------------------------------------------------------------------------//



































