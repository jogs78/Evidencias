<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Matriculacion;

class ActivoController extends Controller
{
    function matricular(){
        if (!\Session::has('activo')) return redirect("/seleccionar")->with('warning','Seleccione el grupo activo o vuelva a intentar');
        $activo = \Session::get('activo');
        $activo->refresh();
        return view('docente.curso_activo.matricular',compact("activo"));
    }

    function lista($id){
        $curso =  Curso::find($id);
        return view('docente.curso_activo.lista',compact("curso"));
    }


    //funcion que se llama solo por ajax
    function agregar(Request $request, $ide){
        try {
            if (!\Session::has('activo')){
                return response()->json([],401) ;
            }
            $activo = \Session::get('activo');
            $matriculacion = new Matriculacion();
            $matriculacion->curso_id=$activo->id;
            $matriculacion->estudiante_id=$ide;
            $matriculacion->save();
            $a = $matriculacion->toArray();
            $a["nombre"] = $matriculacion->estudiante->name;
            $a["correo"] = $matriculacion->estudiante->email;
            return response()->json($a,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error"],500) ;
        }
    }
        
    function quitar(Request $request, $mid){
        try {
            if (!\Session::has('activo')){
                return response()->json([],401) ;
            }
            $activo = \Session::get('activo');
            $matriculacion =  Matriculacion::find($mid);
            if($matriculacion   != null ){
                $a = $matriculacion->toArray();
                $matriculacion->delete();
                return response()->json($a,200) ;    
            }return response()->json([],404) ;

        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }
/*      }catch (\Exception $e){
            return response()->json(["error"=>"Otro error"],500) ;
        }*/
    }
}