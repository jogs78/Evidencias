<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradaController extends Controller
{
    function validar( Request $request, $cantidad = 0  ) {
        echo "estamos validando....";
        $variables = $request->all(); 
        var_dump($request->all());

        //if($cantidad!=0) return "puso $cantidad";

        if($variables['nombree'] == "docente" )
        return redirect( '/docente' );

        if($variables['nombree'] == "estudiante" )
            return redirect( '/estudiante' );
        
    
            return redirect()->back();
    }
}
