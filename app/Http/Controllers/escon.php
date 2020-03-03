<?php

namespace App\Http\Controllers;
//include
//import
use Illuminate\Http\Request;

class escon extends Controller
{
    function listar($control=1) {
        switch ($control) {
            case 1:
                $nombre = "Hugo";
                break;
            case 2:
                $nombre = "Paco";
                break;
            case 3:
                $nombre = "Luis";
                break;
                    
            default:
                $nombre = "desconocido";
                break;
        }
        return view('estudiante.estudiante')
        ->with('nombre', $nombre);
        ;

        //        return view('estudiante.estudiante');
    }

}


?>
