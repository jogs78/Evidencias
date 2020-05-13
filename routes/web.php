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
    return view('welcome');
});

Route::resource('curso', 'docente\CursoController')->middleware('auth');;
Route::get('/seleccionar',     'docente\CursoController@seleccionar')->middleware('auth');;
Route::get('/activar/{curso}',    'docente\CursoController@activar')->middleware('auth');;

Route::resource('rubrica', 'docente\RubricaController')->middleware('auth')->middleware('auth');;
Route::resource('aspecto', 'docente\AspectoController')->middleware('auth')->except(['index','create']);
Route::get('/aspecto/create/{rid}',  'docente\AspectoController@create')->middleware('auth');


Route::resource('evidencia', 'docente\EvidenciaController')->middleware('auth');

Route::get('/estudiante', 'estudiante\EstudianteController@index')->middleware('auth');
Route::get('/entregar/{eid}', 'estudiante\EstudianteController@entregar')->middleware('auth');
Route::post('/entregar/{eid}', 'estudiante\EstudianteController@subir')->middleware('auth');

Route::get('/matricular','docente\ActivoController@matricular')->middleware('auth');
Route::get('/agregar/{ide}' ,'docente\ActivoController@agregar')->middleware('auth');
Route::delete('/quitar/{mid}' ,'docente\ActivoController@quitar')->middleware('auth');
Route::get('/pasar_lista','docente\ActivoController@pasar_lista')->middleware('auth');
Route::post('/asistencia/{mid}','docente\ActivoController@asistencia')->middleware('auth');


//Route::get('/lista/{curso}',    'docente\CursoController@lista');




Route::get('/historicoe','estudiante\EstudianteController@historicoe');





Route::get('/equipos_grupo',           'docente\EvidenciaController@equipos_grupo');
Route::get('/valorar',           'docente\EvidenciaController@valorar');
Route::get('/agregar_unidad',     'docente\CursoController@agregar_unidad');




Route::post('/validar','EntradaController@validar');



Route::get('/diario',    'docente\EstudianteController@diario');
Route::get('/agrupar',  'docente\EstudianteController@agrupar');
Route::get('/historico','docente\EstudianteController@historico');
//Route::get('/matricular','docente\EstudianteController@matricular');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
