<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('/inicio');
});

Route::get('inicio', function () {
    return view('/inicio');
});


Route::get('/centros_Luz_María', function () {
    return view('centros_Luz_María');
});
Route::get('/instalaciones_Luz_María', function () {
    return view('instalaciones_Luz_María');
});
Route::get('/titular_Elisa_Tamara', function () {
    return view('titular_Elisa_Tamara');
});


Route::get('/centros_Eva_Moreno', function () {
    return view('centros_Eva_Moreno');
});
Route::get('/instalaciones_Eva_Moreno', function () {
    return view('instalaciones_Eva_Moreno');
});
Route::get('/titular_Laura_Patricia', function () {
    return view('titular_Laura_Patricia');
});


Route::get('/centros_Bertha_von', function () {
    return view('centros_Bertha_von');
});
Route::get('instalaciones_Bertha_Von', function () {
    return view('instalaciones_Bertha_Von');
});
Route::get('/titular_Alicia_Judith', function () {
    return view('titular_Alicia_Judith');
});


Route::get('/centros_Carolina_Agazzi', function () {
    return view('centros_Carolina_Agazzi');
});
Route::get('/instalaciones_Carolina_Agazzi', function () {
    return view('instalaciones_Carolina_Agazzi');
});
Route::get('/titular_María_Jesús', function () {
    return view('titular_María_Jesús');
});


Route::get('/centros_Carmen_Serdan', function () {
    return view('centros_Carmen_Serdan');
});
Route::get('/instalaciones_Carmen_Serdan', function () {
    return view('instalaciones_Carmen_Serdan');
});
Route::get('/titular_María_Ofelia', function () {
    return view('titular_María_Ofelia');
});


Route::get('/informacion_destacada', function () {
    return view('informacion_destacada');
});

Route::get('/preguntas_frecuentes', function () {
    return view('preguntas_frecuentes');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/mapas', function () {
    return view('mapas');
});

Route::get('/inscripcion_from','InscripcionController@index')->name('inscripcion_from');
Route::get('/formulario_inscripcion', function () {
    return view('inscripcion_from');
});
Route::post('guardar_inscripcion', 'InscripcionController@getwebservice')->name('guardar_inscripcion');
Route::post('guardar_inscripcion_bd', 'InscripcionController@guardar')->name('guardar_inscripcion_bd');

Route::get('/reinscripcion','ReinscripcionController@index')->name('reinscripcion');
Route::post('guardar_reinscripcion', 'ReinscripcionController@getwebservice')->name('guardar_reinscripcion');
Route::post('guardar_reinscripcion_bd', 'ReinscripcionController@guardar')->name('guardar_reinscripcion_bd');

Route::post('consulta_curp', 'WebServicesRENAPO@getCurp')->name('consulta_curp');




//rutas para superusuarios
Route::group(['middleware' => ['nocache','permission:view_users|edit_users|delete_users|create_users']], function() {
    Route::resource('users','UserController');
    Route::get('create','UserController@create');
    Route::get('edit/{id}','UserController@edit')->name('edit');
    Route::post('update/{id}','UserController@update')->name('update');
    Route::post('store','UserController@store')->name('store');
    Route::get('destroy/{id}','UserController@destroy')->name('destroy');
    Route::get('reactive/{id}','UserController@reactive')->name('reactive');
});

Route::group(['middleware' => ['nocache','permission:view_roles|edit_roles|delete_roles|create_roles']], function() {
    Route::resource('roles','RoleController');    
    Route::post('guardar_rol','RoleController@store')->name('guardar_rol');
});

Route::group(['middleware' => ['permission:view_inscripcion','nocache']], function() {
//Route::group(['middleware' => ['permission:view_inscripcion']], function() {
    Route::get('/lista_inscripcion','Admin\AdminController@showListInscri')->name('lista_inscripcion');
    Route::get('/lista_documentos_inscr/{id}', 'Admin\DocumentosController@show_inscr')->name('lista_documentos_inscr');
    Route::post('/email_info_recibida_inscr', 'Admin\EmailController@sendEmailRecibiInscrip')->name('email_info_recibida_inscr');
    Route::post('actualizar_caci','Admin\AdminController@actualizarCaci')->name('actualizar_caci');
    Route::get('/email_lista_espera/{nombre_tutor}/{ap_paterno}/{email}', 'Admin\EmailController@sendEmailEspera')->name('email_lista_espera');
});

Route::group(['middleware' => ['nocache','permission:view_reinscripcion']], function() {
//Route::group(['middleware' => ['permission:view_reinscripcion']], function() {
    Route::get('/lista_reinscripcion','Admin\AdminController@showListReinscri')->name('lista_reinscripcion');
    Route::get('/lista_documentos/{id}', 'Admin\DocumentosController@show')->name('lista_documentos');
    Route::post('/email_info_recibida', 'Admin\EmailController@sendEmailRecibi')->name('email_info_recibida');
    Route::post('/email_info_recibida_reinscri', 'Admin\EmailController@sendEmailRecibiReinscri')->name('email_info_recibida_reinscri');
});
//rutas para roles
/* Route::group(['middleware' => ['permission:view_roles|edit_roles|delete_roles|create_roles']], function() {
}); */
//rutas para login
Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login','Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout','Seguridad\LoginController@logout')->name('logout');
//rutas para el admin
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>['auth','superadmin']], function () {
    //Route::get('', 'AdminController@index');
  
    //Route::get('/lista_inscripcion','AdminController@showListInscri')->name('lista_inscripcion');
    //Route::get('/lista_reinscripcion','AdminController@showListReinscri')->name('lista_reinscripcion');
    //Route::get('/lista_documentos/{id}', 'DocumentosController@show')->name('lista_documentos');
    //Route::post('/email_info_recibida', 'EmailController@sendEmailRecibi')->name('email_info_recibida');
    //Route::post('/email_info_recibida_reinscri', 'EmailController@sendEmailRecibiReinscri')->name('email_info_recibida_reinscri');
    //Route::post('/email_info_recibida_inscr', 'EmailController@sendEmailRecibiInscrip')->name('email_info_recibida_inscr');
    //Route::get('/email_lista_espera/{nombre_tutor}/{ap_paterno}/{email}', 'EmailController@sendEmailEspera')->name('email_lista_espera');
    //Route::get('/lista_documentos_inscr/{id}', 'DocumentosController@show_inscr')->name('lista_documentos_inscr');
    
    //Route::get('/detalles_documento/{id}', 'DocumentosController@details')->name('detalles_documento');
    //Route::get('/lista_menores/{id_caci}', 'ListaMenoresController@menoresByCaci')->name('lista_menores');
//});
//Pruebas webservice
Route::get('/webservice','WebService@getwebservice')->name('webservice');

Route::post('webservicerenapo', 'WebServicesRENAPO@getCurp')->name('webservicerenapo');

Route::post('webservicecp', 'WebServicesCP@getCP')->name('webservicecp');

/*Pruebas Web Service*/
/* Route::get('/webservicerenapo', 'WebServicesRENAPO@getCurp')->name('webservicerenapo'); */

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/registo_aqui', function () {
    return view('registo_aqui');
});

Route::get('/aviso_privacidar', function () {
    return view('aviso_privacidar');
});

/*Exporta Excel*/ 
Route::get('/export-excel', 'ExportExcelController@excel')->name('export-excel');
Route::get('/export-excel-reinscripcion', 'ExportExcelReinsController@excel')->name('export-excel-reinscripcion');