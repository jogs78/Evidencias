<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function validar( Request  $request){
        //        var_dump($request->all() );
                $datos = $request->all() ;
                if($datos['nombre'] == "docente")
                    return redirect("/seleccionar");
                if($datos['nombre'] == "estudiante")
                    return redirect("/estudiante");
                  return redirect() -> back();
    }
}
