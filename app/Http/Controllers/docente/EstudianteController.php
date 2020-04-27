<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//php artisan make:controller docente/EvidenciaController -r
class EstudianteController extends Controller
{
    function historico() {
        return view('docente.estudiantes.historico');
    }    
    function lista() {
    }
    function diario() {
        return view('docente.estudiantes.diario');
    }
    function matricular() {
        return view('docente.estudiantes.matricular');
    }
    function agrupar() {
        //ver que alumnos son
        //ver de que equipo
        //ver de que evidencia se trata
        //asignar calificacion a cada rubro
        //sacar promedio general
        return view('docente.estudiantes.agrupar');
    }
    function agregar_estudiante() {
        return view('docente.estudiantes.agregar_estudiante');
    }

}
