<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Matriculacion;
use App\Asistencia;

class ActivoController extends Controller
{
    function matricular(){
        if (!\Session::has('activo')) return redirect("/seleccionar")->with('warning','Seleccione el grupo activo o vuelva a intentar');
        $activo = \Session::get('activo');
        $activo->refresh();
        return view('docente.curso_activo.matricular',compact("activo"));
    }

    function pasar_lista(){
        if (!\Session::has('activo')) return redirect("/seleccionar")->with('warning','Seleccione el grupo activo o vuelva a intentar');
        $activo = \Session::get('activo');
        $activo->refresh();
        return view('docente.curso_activo.pasar_lista',compact("activo"));
    }
    
    function equipos(){
        if (!\Session::has('activo')) return redirect("/seleccionar")->with('warning','Seleccione el grupo activo o vuelva a intentar');
        $activo = \Session::get('activo');
        $activo->refresh();
        return view('docente.curso_activo.equipos',compact("activo"));
    }
    


    //funcion que se llama solo por ajax
    
    function asistencia(Request $request, $mid){
        try {
            if (!\Session::has('activo')){
                return response()->json([],401) ;
            }
            $activo = \Session::get('activo');

            $asistencia = new Asistencia;
            $asistencia->matriculacion=$mid;
            $asistencia->fill($request->all());
            $asistencia->save();
            $a = $asistencia->toArray();
//            $a = $request->all();
            return response()->json($a,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error"],500) ;
        }
    }

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
    }

    function agrupar(Request $request, $mid){
        try {
            if (!\Session::has('activo')){
                return response()->json([],401) ;
            }
            $activo = \Session::get('activo');

            $matriculacion =  Matriculacion::find($mid);
            $matriculacion->equipo =  $request->input('equipo');
            $matriculacion->save();
            $a = $matriculacion->toArray();
            //$a = $request->all();
            return response()->json($a,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error"],500) ;
        }
    }


}