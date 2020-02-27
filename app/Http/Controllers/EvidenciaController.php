<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvidenciaController extends Controller
{
    function dejar() {
        //revisar los temas vistos
        //ver cuales son los temas por ver
        //planear un ejercicio
        //redactar
        return view('docente.dejar');
    }
    function calificar() {
        //leer el trabajo
        //leer la rubrica
        //asignar puntos por rubro
        //sacar promedio
        return view('docente.calificar');
    }

    //
}
