<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricaController extends Controller
{
    function listar_rubricas() {
        return view('docente.rubricas.listar_rubricas');
    }
    function crear_rubrica() {
        return view('docente.rubricas.crear_rubrica');
    }
    function crear_criterio() {
        return view('docente.rubricas.crear_criterio');
    }
    
    

}
