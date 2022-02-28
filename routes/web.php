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


Route::get('/centros_caci', function () {
    return view('centros_caci.centros_Luz_María');
});
/* Route::get('/instalaciones_Luz_María', function () {
    return view('centros_caci.instalaciones_Luz_María');
});
Route::get('/titular_Elisa_Tamara', function () {
    return view('centros_caci.titular_Elisa_Tamara');
});


Route::get('/centros_Eva_Moreno', function () {
    return view('centros_caci.centros_Eva_Moreno');
});
Route::get('/instalaciones_Eva_Moreno', function () {
    return view('centros_caci.instalaciones_Eva_Moreno');
});
Route::get('/titular_Laura_Patricia', function () {
    return view('centros_caci.titular_Laura_Patricia');
});


Route::get('/centros_Bertha_von', function () {
    return view('centros_caci.centros_Bertha_von');
});
Route::get('instalaciones_Bertha_Von', function () {
    return view('centros_caci.instalaciones_Bertha_Von');
});
Route::get('/titular_Alicia_Judith', function () {
    return view('centros_caci.titular_Alicia_Judith');
});


Route::get('/centros_Carolina_Agazzi', function () {
    return view('centros_caci.centros_Carolina_Agazzi');
});
Route::get('/instalaciones_Carolina_Agazzi', function () {
    return view('centros_caci.instalaciones_Carolina_Agazzi');
});
Route::get('/titular_María_Jesús', function () {
    return view('centros_caci.titular_María_Jesús');
});


Route::get('/centros_Carmen_Serdan', function () {
    return view('centros_caci.centros_Carmen_Serdan');
});
Route::get('/instalaciones_Carmen_Serdan', function () {
    return view('centros_caci.instalaciones_Carmen_Serdan');
});
Route::get('/titular_María_Ofelia', function () {
    return view('centros_caci.titular_María_Ofelia');
}); */


Route::get('/informacion_destacada', function () {
    return view('secciones_menu.informacion_destacada');
});

Route::get('/requisitos', function () {
    return view('secciones_menu.requisitos');
});

Route::get('/preguntas_frecuentes', function () {
    return view('secciones_menu.preguntas_frecuentes');
});

Route::get('/login', function () {
    return view('secciones_menu.login');
});

/* Route::get('/mapas', function () {
    return view('centros_caci.mapas');
}); */

Route::get('/prueba', 'ReinscripcionController@prueba')->name('prueba');

Route::get('/preinscripcion', function () {
    return view('preinscripcion_form');
});
Route::get('/preinscripcion_validar_rfc', function () {
    return view('preinscripcion.preinscripcion_validar_rfc');
});

/* Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index'); */

/* Route::post('guardar_inscripcion', 'InscripcionController@getwebservice')->name('guardar_inscripcion'); */
Route::post('preinscripcion', 'InscripcionController@getwebservice')->name('preinscripcion');
Route::post('guardar_inscripcion_bd', 'InscripcionController@guardar')->name('guardar_inscripcion_bd');

Route::get('/reinscripcion', 'ReinscripcionController@index')->name('reinscripcion');
Route::post('guardar_reinscripcion', 'ReinscripcionController@getwebservice')->name('guardar_reinscripcion');
Route::post('guardar_reinscripcion_bd', 'ReinscripcionController@guardar')->name('guardar_reinscripcion_bd');

Route::post('consulta_curp', 'WebServicesRENAPO@getCurp')->name('consulta_curp');




//rutas para superusuarios
Route::group(['middleware' => ['nocache', 'permission:view_users|edit_users|delete_users|create_users']], function () {
    Route::resource('users', 'UserController');
    Route::get('create', 'UserController@create');
    Route::get('edit/{id}', 'UserController@edit')->name('edit');
    Route::post('update/{id}', 'UserController@update')->name('update');
    Route::post('store', 'UserController@store')->name('store');
    Route::post('destroy', 'UserController@destroy')->name('destroy');
    Route::get('reactive/{id}', 'UserController@reactive')->name('reactive');
});

Route::group(['middleware' => ['nocache', 'permission:view_roles|edit_roles|delete_roles|create_roles']], function () {
    Route::resource('roles', 'RoleController');
    Route::post('guardar_rol', 'RoleController@store')->name('guardar_rol');
});

Route::group(['middleware' => ['permission:view_repositorio', 'nocache']], function () {
    Route::get('all_datos_repositorio', 'Admin\DocumentosController@getAllDatosRepos')->name('all_datos_repositorio');
    Route::get('ver_detalles_repo_pre/{id}', 'Admin\DocumentosController@getByIdRepo')->name('ver_detalles_repo_pre');
    Route::post('/get_list_repo_by_ciclo', 'Admin\DocumentosController@getAllDatosReposByCicloEscolar')->name('get_list_repo_by_ciclo');
    Route::get('all_datos_repositorio_reins', 'Admin\DocumentosController@getAllDatosReposReins')->name('all_datos_repositorio_reins');
    Route::get('ver_detalles_repo_reins/{id}', 'Admin\DocumentosController@getByIdRepoReins')->name('ver_detalles_repo_reins');
    Route::post('/get_list_repo_reins_by_ciclo', 'Admin\DocumentosController@getAllDatosReposReinsByCicloEscolar')->name('get_list_repo_reins_by_ciclo');
    Route::post('/excel_data_repository', 'CreateReportController@excel')->name('excel_data_repository');
});
Route::group(['middleware' => ['permission:view_inscripcion', 'nocache']], function () {
    //Route::group(['middleware' => ['permission:view_inscripcion']], function() {
    /* Route::get('/prueba', function () {
        return view('admin.prueba');
    }); */
    Route::get('/lista_inscripcion', 'Admin\AdminController@showListInscri')->name('lista_inscripcion');
    Route::post('/get_list_by_ciclo', 'Admin\AdminController@getListByCicloEscolar')->name('get_list_by_ciclo');
    Route::get('/lista_documentos_inscr/{id}', 'Admin\DocumentosController@show_inscr')->name('lista_documentos_inscr');
    Route::post('/set_data_respositorio', 'Admin\DocumentosController@setDataRepositorio')->name('set_data_respositorio');
    Route::post('/set_persona_autorizada', 'Admin\DocumentosController@setPersonaAutorizada')->name('set_persona_autorizada');
    Route::post('/update_data_respositorio/{idRepo}', 'Admin\DocumentosController@updateDataRepositorio')->name('update_data_respositorio');
    Route::post('/update_persona_autorizada/{idPA}', 'Admin\DocumentosController@updatePA')->name('update_persona_autorizada');
    Route::get('destroy_reg_sol', 'Admin\DocumentosController@destroy')->name('destroy_reg_sol');
    Route::get('log_by_id', 'Admin\DocumentosController@getDataLogById')->name('log_by_id');
    Route::post('/email_info_recibida_inscr', 'Admin\EmailController@sendEmailRecibiInscrip')->name('email_info_recibida_inscr');
    Route::post('actualizar_caci', 'Admin\AdminController@actualizarCaci')->name('actualizar_caci');
    Route::post('actualizar_documento', 'Admin\DocumentosController@actualizarDoc')->name('actualizar_documento');
    Route::get('/email_lista_espera/{nombre_tutor}/{ap_paterno}/{email}', 'Admin\EmailController@sendEmailEspera')->name('email_lista_espera');
});

Route::group(['middleware' => ['nocache', 'permission:view_reinscripcion']], function () {
    //Route::group(['middleware' => ['permission:view_reinscripcion']], function() {
    Route::get('/lista_reinscripcion', 'Admin\AdminController@showListReinscri')->name('lista_reinscripcion');
    Route::post('/get_list_by_ciclo_reins', 'Admin\AdminController@getListByCicloEscolarReins')->name('get_list_by_ciclo_reins');
    Route::get('/lista_documentos/{id}', 'Admin\DocumentosController@show')->name('lista_documentos');
    Route::post('/set_data_respositorio_reinscripcion', 'Admin\DocumentosController@setDataRepositorioReinscripcion')->name('set_data_respositorio_reinscripcion');
    Route::post('/update_data_respositorio_reinscripcion/{idRepo}', 'Admin\DocumentosController@updateDataRepositorioReinscripcion')->name('update_data_respositorio_reinscripcion');
    Route::post('/email_info_recibida', 'Admin\EmailController@sendEmailRecibi')->name('email_info_recibida');
    Route::post('/email_info_recibida_reinscri', 'Admin\EmailController@sendEmailRecibiReinscri')->name('email_info_recibida_reinscri');    
});
//rutas para roles
/* Route::group(['middleware' => ['permission:view_roles|edit_roles|delete_roles|create_roles']], function() {
}); */
//rutas para login
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');

//Pruebas webservice
Route::get('/webservice', 'WebService@getwebservice')->name('webservice');

Route::post('webservicerenapo', 'WebServicesRENAPO@getCurp')->name('webservicerenapo');

Route::post('webservicecp', 'WebServicesCP@getCP')->name('webservicecp');

Route::get('/registo_aqui', function () {
    return view('registo_aqui');
});

Route::get('/aviso_privacidar', function () {
    return view('aviso_privacidar');
});

/*Exporta Excel*/
/* Route::post('/export-excel', 'ExportExcelController@excel')->name('export-excel');
Route::post('/export-excel-reinscripcion', 'ExportExcelReinsController@excel')->name('export-excel-reinscripcion'); */
