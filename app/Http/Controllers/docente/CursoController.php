<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CursoController extends Controller
{
    function listar_cursos() {
        return view('docente.curso.listar_cursos');
    }
    function seleccionar() {
        return view('docente.curso.seleccionar');
    }
    function agregar_curso() {
        return view('docente.curso.agregar');
    }
    function agregar_unidad() {
        return view('docente.unidad.agregar_unidad');
    }
    
    

}
