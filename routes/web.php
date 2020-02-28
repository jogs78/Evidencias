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
    return view('inicio');
});



Route::get('/estudiante', function () {
    return view('estudiante.estudiante');
});



Route::get('/historico',     'docente\EstudianteController@historico');
Route::get('/docente',     'docente\GrupoController@seleccionar');
Route::get('/grupo',     'docente\GrupoController@grupo');
Route::get('/dejar',     'docente\EvidenciaController@dejar');
Route::get('/listar_evidencias', 'docente\EvidenciaController@listar_evidencias');
Route::get('/calificar', 'docente\EvidenciaController@calificar');
Route::get('/lista',     'docente\EstudianteController@lista');
Route::get('/agrupar', 'docente\EstudianteController@agrupar');
Route::get('/crear', 'docente\RubricaController@crear');

Route::get('/seleccionar', function () {
    return view('docente.grupos');
});