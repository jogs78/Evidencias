<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstudianteController extends Controller
{
    function dejar() {
        return view('docente.evidencias.dejar');
    }

    function calificar() {
        //ver que alumnos son
        //ver de que equipo
        //ver de que evidencia se trata
        //asignar calificacion a cada rubro
        //sacar promedio general
        return view('docente.evidencias.calificar');
    }
}
