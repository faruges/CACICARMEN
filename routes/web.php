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


Route::get('/preguntas_frecuentes', function () {
    return view('preguntas_frecuentes');
});


Route::get('/centros', function () {
    return view('centros');
});
Route::get('/Luz_María1', function () {
    return view('Luz_María1');
});

Route::get('/Luz_María2', function () {
    return view('Luz_María2');
});



Route::get('/Eva_Moreno', function () {
    return view('Eva_Moreno');
});
Route::get('/Eva_Moreno1', function () {
    return view('Eva_Moreno1');
});
Route::get('/Eva_Moreno2', function () {
    return view('Eva_Moreno2');
});



Route::get('/Bertha_von', function () {
    return view('Bertha_von');
});
Route::get('Bertha_Von1', function () {
    return view('Bertha_Von1');
});
Route::get('/Bertha_Von2', function () {
    return view('Bertha_Von2');
});



Route::get('/Carolina_Agazzi', function () {
    return view('Carolina_Agazzi');
});
Route::get('/Carolina_Agazzi1', function () {
    return view('Carolina_Agazzi1');
});
Route::get('/Carolina_Agazzi2', function () {
    return view('Carolina_Agazzi2');
});



Route::get('/Carmen_Serdan', function () {
    return view('Carmen_Serdan');
});
Route::get('/Carmen_Serdan1', function () {
    return view('Carmen_Serdan1');
});
Route::get('/Carmen_Serdan2', function () {
    return view('Carmen_Serdan2');
});

Route::get('/informacion_destacada', function () {
    return view('informacion_destacada');
});

Route::get('/video', function () {
    return view('video');
});



Route::get('/login', function () {
    return view('login');
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

Route::get('/tramiles_CACI', function () {
    return view('tramiles_CACI');
});

Route::get('/registo_aqui', function () {
    return view('registo_aqui');
});

Route::get('/aviso_privacidar', function () {
    return view('aviso_privacidar');
});

//rutas para superusuarios
Route::group(['middleware' => ['permission:view_users|edit_users|delete_users|create_users']], function() {
    Route::resource('users','UserController');
    Route::get('create','UserController@create');
    Route::get('edit/{id}','UserController@edit')->name('edit');
    Route::post('update/{id}','UserController@update')->name('update');
    Route::post('store','UserController@store')->name('store');
    Route::get('destroy/{id}','UserController@destroy')->name('destroy');
});

Route::group(['middleware' => ['permission:view_roles|edit_roles|delete_roles|create_roles']], function() {
    Route::resource('roles','RoleController');    
    Route::post('guardar_rol','RoleController@store')->name('guardar_rol');
});

Route::group(['middleware' => ['permission:view_inscripcion']], function() {
//Route::group(['middleware' => ['permission:view_inscripcion']], function() {
    Route::get('/lista_inscripcion','Admin\AdminController@showListInscri')->name('lista_inscripcion');
    Route::get('/lista_documentos_inscr/{id}', 'Admin\DocumentosController@show_inscr')->name('lista_documentos_inscr');
    Route::post('/email_info_recibida_inscr', 'Admin\EmailController@sendEmailRecibiInscrip')->name('email_info_recibida_inscr');
    Route::get('/email_lista_espera/{nombre_tutor}/{ap_paterno}/{email}', 'Admin\EmailController@sendEmailEspera')->name('email_lista_espera');
});

Route::group(['middleware' => ['permission:view_reinscripcion']], function() {
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

Route::get('/ubuicacion', function () {
    return view('ubuicacion');
});

//Pruebas webservice
Route::get('/webservice','WebService@getwebservice')->name('webservice');

Route::post('webservicerenapo', 'WebServicesRENAPO@getCurp')->name('webservicerenapo');

Route::post('webservicecp', 'WebServicesCP@getCP')->name('webservicecp');

/*Pruebas Web Service*/
/* Route::get('/webservicerenapo', 'WebServicesRENAPO@getCurp')->name('webservicerenapo'); */

Route::get('/prueba', function () {
    return view('prueba');
});

/*Exporta Excel*/ 
Route::get('/export-excel', 'ExportExcelController@excel')->name('export-excel');
Route::get('/export-excel-reinscripcion', 'ExportExcelReinsController@excel')->name('export-excel-reinscripcion');