<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstudianteController extends Controller
{
    function historico() {
        return view('docente.estudiantes.historico');
    }
    function lista() {
        return view('docente.estudiantes.lista');
    }
    function agrupar() {
        //ver que alumnos son
        //ver de que equipo
        //ver de que evidencia se trata
        //asignar calificacion a cada rubro
        //sacar promedio general
        return view('docente.estudiantes.agrupar');
    }
}
