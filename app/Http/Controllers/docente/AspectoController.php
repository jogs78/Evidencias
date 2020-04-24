<?php

namespace App\Http\Controllers\docente;
//php artisan make:controller docente/AspectoController -r


use Illuminate\Support\Facades\Auth;

use App\Aspecto;
use App\Rubrica;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AspectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($rid)
    {
        //
        return view('docente.aspectos.crear_aspecto',compact('rid'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        
        $aspecto = new Aspecto;
        $aspecto->fill($request->all());
        $aspecto->save();
        return redirect("/rubrica/$aspecto->rubrica_id/edit")->with('success','El aspecto (critetio) ha sido creado');;  
    }

    /**
     * Muestra el recurso espedificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aspecto =  Aspecto::find($id);
        echo $aspecto->toJson();
    }
    /**
     * Muestra para editar el recurso espedificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aspecto =  Aspecto::find($id);
        $this->authorize('edit', $aspecto);
        return view('docente.aspectos.editar_aspecto', compact("aspecto"));
    }

    /**
     * Actualiza los valores de la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aspecto =  Aspecto::find($id);
        $aspecto->fill($request->all());
        $aspecto->save();
        return redirect("/rubrica/$aspecto->rubrica_id/edit")->with('success','El aspecto (critetio) ha sido actualizado');;  
    }

    /**
     * Elimina de la base de datos el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $aspecto= Aspecto::find($id);  
            if ($aspecto != null){
                $rid = $aspecto->rubrica_id;
                $aspecto->delete();
                return redirect("/rubrica/$rid/edit")->with('success','El aspecto (critetio) ha sido borrado');
            }else{
                return redirect("/rubrica")->with('error','El aspecto (critetio) no ha sido  encontrado');
            }
        }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000) 
                return redirect("/rubrica/$rid/edit")->with('error', $e->getMessage());;
        }
    }
}
