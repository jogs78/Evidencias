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

Route::get('/docente', function () {
    return view('docente.docente');
});

Route::get('/estudiante', function () {
    return view('estudiante.estudiante');
});

Route::get('/dejar', function () {
    return view('docente.dejar');
});

Route::get('/calificar', function () {
    return view('docente.calificar');
});

