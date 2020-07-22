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


Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/centros', function () {
    return view('centros');
});

Route::get('/centros1', function () {
    return view('centros1');
});

Route::get('/centros2', function () {
    return view('centros2');
});

Route::get('/centros3', function () {
    return view('centros3');
});

Route::get('/centros4', function () {
    return view('centros4');
});





Route::get('/requisitos', function () {
    return view('requisitos');
});

Route::get('/tramites', function () {
    return view('tramites');
});

Route::get('/civil_proteccion', function () {
    return view('civil_proteccion');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/inscripcion', function () {
    return view('inscripcion');
});


Route::get('/reinscripcion', function () {
    return view('reinscripcion');
});


Route::get('/tramiles_CACI', function () {
    return view('tramiles_CACI');
});


Route::get('/instalaciones', function () {
    return view('instalaciones');
});


Route::get('/titular', function () {
    return view('titular');
});


Route::get('/registo_aqui', function () {
    return view('registo_aqui');
});

Route::get('/doc', function () {
    return view('doc_prueba');
});

Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login','Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout','Seguridad\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>['auth','superadmin']], function () {
    Route::get('', 'AdminController@index');
    Route::get('/lista_inscripcion','AdminController@showListInscri')->name('lista_inscripcion');
    Route::get('/lista_reinscripcion','AdminController@showListReinscri')->name('lista_reinscripcion');
    //Route::get('', 'ListaCaciController@index');
    Route::get('/lista_documentos/{id}', 'DocumentosController@show')->name('lista_documentos');
    Route::get('/detalles_documento/{id}', 'DocumentosController@details')->name('detalles_documento');
    Route::get('/lista_menores/{id_caci}', 'ListaMenoresController@menoresByCaci')->name('lista_menores');
});

Route::post('guardar_inscripcion', 'InscripcionController@guardar')->name('guardar_inscripcion');
Route::post('guardar_reinscripcion', 'ReinscripcionController@guardar')->name('guardar_reinscripcion');



Route::get('/niño', function () {
    return view('niño');
});


Route::get('/ubuicacion', function () {
    return view('ubuicacion');
});






