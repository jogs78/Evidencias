<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrupoController extends Controller
{
    function grupo() {
        return view('docente.grupos.grupo');
    }
    function seleccionar() {
        return view('docente.grupos.seleccionar');
    }

}
