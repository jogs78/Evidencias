<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvidenciaController extends Controller
{
    function dejar() {
        return view('docente.evidencias.dejar');
    }

    function listar_evidencias() {
        //ver que alumnos son
        //ver de que equipo
        //ver de que evidencia se trata
        //asignar calificacion a cada rubro
        //sacar promedio general
        return view('docente.evidencias.listar_evidencias');
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
