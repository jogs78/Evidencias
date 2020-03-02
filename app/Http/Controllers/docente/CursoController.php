<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CursoController extends Controller
{
    function grupo() {
        return view('docente.curso.grupo');
    }
    function seleccionar() {
        return view('docente.curso.seleccionar');
    }
    function agregar_curso() {
        return view('docente.curso.agregar');
    }

    

}
