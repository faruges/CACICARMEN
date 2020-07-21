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




Route::get('/niño', function () {
    return view('niño');
});


Route::get('/ubuicacion', function () {
    return view('ubuicacion');
});






