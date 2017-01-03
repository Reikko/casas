<?php
//Rutas unicas para mostrar vistas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('nuevas/select','CasaControl@select');       //Seleccion entre una o varias casas
Route::get('nuevas/cp','CasaControl@cp');               //Envia el codigo postal
//------------------------------------------------//

//Utilizada para el cambio de estado al crear
Route::get('des/estado/{id}','EdoControl@getCiudades');
Route::get('des/{n}/estado/{id}','EdoControl@getEditCiudades');
//

Route::resource('des','DesControl');


Route::resource('edo','EdoControl');
Route::resource('cdad','CdadControl');
Route::resource('calle','CalleControl');        //Crear calles del nuevo desarrollo
Route::resource('client','ClienteControl');
Route::resource('propiedad','PropiedadControl');
Route::resource('trabajador','TrabControl');    //Trabajador
Route::resource('unidad','UnidadControl');      //
Route::get('unidad/{id}/bloquear','UnidadControl@bloquear');

Route::resource('nuevas','CasaControl');        //Registro de nuevas casas
Route::resource('una','UnaControl');            //Registro de solo una nueva propiedad
Route::resource('varias','VariasControl');      //Registro d varias propiedades
Route::resource('inquilino','InquilinoControl');//
Route::resource('cuota','CuotaControl');            //Registro de cuotas //Servicio, Mantenimiento...etc
Route::resource('periodo','PeriodoControl');        //Registro de periodos // Diario, Semanal etc...
//Route::resource('email','MailController');          //Utiliza para enviar correos de prueba no utilizada aun
Route::resource('relacion','RelacionPropiedad');    //Utiliza para crear una relacion entre la propiedad y un ocupante.
Route::resource('tipo','TipoCuotaControl');         //Utilizada para crear los tipos de cuotas.
Route::resource('reporte','ReporteControl');        //Ruta para generar un reporte nuevo.
Route::resource('tabla','TablaReporteControl');        //Ruta para generar un reporte nuevo.
Route::resource('lugar','LugaresControl');        //Ruta para generar un nuevo lugar.
Route::resource('fallo','TipoFalloControl');        //Ruta para generar un nuevo tipo de lugar de defecto.
Route::resource('tipofallo','DescripcionControl');        //Ruta para crear las descripciones de cada defecto.
Route::resource('user','UserControl');        //Ruta para crear las descripciones de cada defecto.

//Obtener el desarrollo y darlo de alta en el mismo desarrollo
Route::get('calle/create/{id}','CalleControl@getDesarrollo');
Route::post('calle/create/{id}', 'CalleControl@store2');
//

//Agregar una descripcion dependiendo del tipo de fallo que seleccione
Route::get('tipofallo/{id}/create','DescripcionControl@tipo');
//----------------------------------------------------------------

//Obtener el id de la propiedad y crear sus cuotas-----------
Route::get('cuota/create/{id}','CuotaControl@getCuota');
//-----------------------------------------------------------

Route::auth();

//---------------------------Rutas para Los accesos de usuarios
Route::get('/user/login','AdminControl@showLoginForm');
Route::post('/user/login','AdminControl@login');
//-------------------------------------------------------------//

//-----------------Ruta para El codigo Postal--------------//
Route::post('una/cp','UnaControl@showDireccion');
//---------------------------------------------------------//

//-----------------Ruta para Crear una relacion entre propiedad e inquilino--------------//
Route::get('nuevas/{id}/create','CasaControl@relacion');
//---------------------------------------------------------//

//-----------------Ruta para El reporte--------------//
Route::get('reporte/create/{id}','ReporteControl@crear');
Route::get('tabla/{rep}/edit/{id}','TablaReporteControl@fila');
//---------------------------------------------------------//

//-----------------Cambio select en  Tabla de defectos--------------//
Route::get('tabla/{un}/defecto/{id}','TablaReporteControl@selectDefecto');
Route::get('tabla/{un}/edit/defecto/{id}','TablaReporteControl@selectDefecto');
Route::get('tabla/{id}/completar','TablaReporteControl@completarFila');
//---------------------------------------------------------//


//Ruta para generar el pdf
Route::get('trabajador/obt/pdf/{nombre}/{app}/{apm}/{puesto}','TrabControl@getPdf');
Route::get('reporte/pdf/{id}','ReporteControl@imprimeReporte');
//-------------------------------------------------------------------------------------//



































