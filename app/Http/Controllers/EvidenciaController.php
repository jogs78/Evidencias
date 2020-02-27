<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvidenciaController extends Controller
{
    function dejar() {
        return view('docente.dejar');
    }

    function calificar() {
        //ver que alumnos son
        //ver de que equipo
        //ver de que evidencia se trata
        //asignar calificacion a cada rubro
        //sacar promedio general
        return view('docente.calificar');
    }
}
