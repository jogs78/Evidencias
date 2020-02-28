<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricaController extends Controller
{
    function crear() {
        return view('docente.rubricas.crear');
    }

}
