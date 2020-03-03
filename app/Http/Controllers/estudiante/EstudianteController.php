<?php

namespace App\Http\Controllers\estudiante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstudianteController extends Controller
{
    function entrega() {
        return view('estudiante.entrega');
    }

    function index() {
        return view('estudiante.estudiante');
    }
    function historicoe() {
        return view('estudiante.historicoe');
    }
    
}
