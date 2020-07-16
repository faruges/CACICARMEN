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

Route::get('/', function () {
    return view('menu');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/centros', function () {
    return view('centros');
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

Route::get('/reinscripción', function () {
    return view('reinscripción');
});




