<?php

namespace App\Http\Controllers\estudiante;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Estudiante;

class EstudianteController extends Controller
{
    function entrega() {
        return view('estudiante.entrega');
    }
    function index() {
        $estudiante = Estudiante::find( Auth::user()->id );  
        return view('estudiante.estudiante', compact("estudiante"));
    }
    function historicoe() {
        return view('estudiante.historicoe');
    }
    
}
