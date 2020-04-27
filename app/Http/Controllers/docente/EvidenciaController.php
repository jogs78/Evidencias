<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//php artisan make:controller docente/EvidenciaController -r
use App\Evidencia;
use App\Rubrica;
class EvidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!\Session::has('activo')) return redirect("/seleccionar")->with('warning','Seleccione el grupo activo o vuelva a intentar');
        $activo = \Session::get('activo');
        $evidencias = Evidencia::where("dejado_en",$activo->id)->get();
        return view('docente.evidencia.listar',compact("activo","evidencias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!\Session::has('activo')) return redirect("/seleccionar")->with('warning','Seleccione el grupo activo o vuelva a intentar');
        $activo = \Session::get('activo');
        $rubricas = Rubrica::all()->where('autor','=',Auth::user()->id);
        return view('docente.evidencia.crear',compact("activo","rubricas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $evidencia = new Evidencia;
            $evidencia->fill($request->all());
            $evidencia->save();
            return redirect("/evidencia")->with('success','La evidencia ha sido dejada');  
        }catch (\Illuminate\Database\QueryException $e){
            return redirect('/evidencia')->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evidencia =  Evidencia::find($id);
        echo $evidencia->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evidencia =  Evidencia::find($id);
        $this->authorize('edit', $evidencia);
        if (!\Session::has('activo')) return redirect("/seleccionar")->with('warning','Seleccione el grupo activo o vuelva a intentar');
        $activo = \Session::get('activo');
        $rubricas = Rubrica::all()->where('autor','=',Auth::user()->id);
        return view('docente.evidencia.editar',compact("activo","rubricas","evidencia"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $evidencia =  Evidencia::find($id);
            $evidencia->fill($request->all());
            $evidencia->save();
            return redirect('/evidencia')->with('success','La evidencia ha sido actualizada');
       }catch (\Illuminate\Database\QueryException $e){
                return redirect('/evidencia')->with('error', $e->getMessage());
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $evidencia= Evidencia::find($id);  
            if ($evidencia != null){
                $evidencia->delete();
                return redirect('/evidencia')->with('success','La evidencia ha sido borrada');
            }else{
                return redirect('/evidencia')->with('error','La evidencia no ha sido encontrada');
            }
        }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000) 
                return redirect('/evidencia')->with('error', $e->getMessage());;
        }
    }
}
