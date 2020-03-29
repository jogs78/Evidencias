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

Route::resource('curso', 'docente\CursoController');
Route::get('/seleccionar',     'docente\CursoController@seleccionar');
Route::get('/agregar_unidad',     'docente\CursoController@agregar_unidad');
Route::get('/matricular/{curso}','docente\CursoController@matricular');
Route::get('/lista/{curso}',    'docente\CursoController@lista');


Route::post('/validar','EntradaController@validar');

Route::get('/estudiante', 'estudiante\EstudianteController@index');
Route::get('/entrega', 'estudiante\EstudianteController@entrega');
Route::get('/historicoe','estudiante\EstudianteController@historicoe');

Route::get('/dejar',             'docente\EvidenciaController@dejar');
Route::get('/listar_evidencias', 'docente\EvidenciaController@listar_evidencias');
Route::get('/equipos_grupo',           'docente\EvidenciaController@equipos_grupo');
Route::get('/valorar',           'docente\EvidenciaController@valorar');

Route::get('/diario',    'docente\EstudianteController@diario');
Route::get('/agrupar',  'docente\EstudianteController@agrupar');
Route::get('/historico','docente\EstudianteController@historico');
Route::get('/matricular','docente\EstudianteController@matricular');

Route::get('/listar_rubricas', 'docente\RubricaController@listar_rubricas');
Route::get('/crear_rubrica', 'docente\RubricaController@crear_rubrica');
Route::get('/crear_criterio', 'docente\RubricaController@crear_criterio');
