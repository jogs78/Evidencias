<?php

namespace App\Http\Controllers\estudiante;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Estudiante;
use App\Evidencia;
use App\Asignacion;
class EstudianteController extends Controller
{
    function entregar($eid) {
        $evidencia = Evidencia::find($eid);
        $asignacion = Asignacion::firstOrCreate(
            ['quien_entrega' => Auth::user()->id ,
            'que_entrega' => $eid]
        );
        return view('estudiante.entregar', compact("evidencia","asignacion"));
    }
    public function subir($eid,Request $request){
        try {
            $file = $request->file('archivo_entregado');
            $extension = $file->getClientOriginalExtension();
            $fileName = Auth::user()->id . "_".  $eid . "_". $file->getClientOriginalName();
            $destinationPath = public_path() . "/evidencias/" ;
            if($extension != "pdf" ) {
                return redirect("/entregar/$eid")->with('error',"Solo puede enviar archivos pdf usted envio un archivo $extension");
            }
            $asignacion = Asignacion::firstOrCreate(
                ['quien_entrega' => Auth::user()->id ,
                'que_entrega' => $eid]
            );
            $file->move($destinationPath,$fileName);
            DB::beginTransaction();    
            $asignacion->archivo_entregado = $fileName;
            $asignacion->cuando_entrego=date("Y-m-d G:i");
            $asignacion->save();
            DB::commit();
            return redirect("/entregar/$eid")->with('success','Evidencia entregada');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect("/entregar/$eid")->with('error',$e->getMessage());
        }
    }

    function index() {
        $estudiante = Estudiante::find( Auth::user()->id );  
        return view('estudiante.estudiante', compact("estudiante"));
    }
    function historicoe() {
        return view('estudiante.historicoe');
    }
    
}
