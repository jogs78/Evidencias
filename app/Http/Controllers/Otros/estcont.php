<?php 

namespace App\Http\Controllers\Otros;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class estcont extends Controller
{
    function index($id){
        //de id pasar a nombre
        if($id == 1 ) $Nombre = "Hugo";
        if($id == 2 ) $Nombre = "Paco";
        if($id == 3 ) $Nombre = "Luis";  
        //return "Bienvenido $Nombre";
        //return view('estudiante.estudiante', compact('Nombre') );
        return view('estudiante.estudiante' )->with( 'Nombre',$Nombre);
    }
}
