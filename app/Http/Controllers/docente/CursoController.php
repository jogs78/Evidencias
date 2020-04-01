<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    /**
     * Muestra el listado de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('docente.curso.listar_cursos', compact('cursos'));
    }

    /**
     * Muestra el formulario para crear el nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.curso.agregar');    }

    /**
     * Guarda los datos del nuevo recurso a crear.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*
        $datos = $request->all();
        var_dump($datos);
        return;
        */
        $curso = new Curso;
        $curso->fill($request->all());
        $curso->save();
        return redirect('/curso');
    }

    /**
     * Muestra el recurso espedificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso =  Curso::find($id);
        echo $curso->toJson();
    }
    /**
     * Muestra para editar el recurso espedificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso =  Curso::find($id);
        return view('docente.curso.editar', compact("curso"));
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
        $curso =  Curso::find($id);
        $curso->fill($request->all());
        $curso->save();
        return redirect('/curso');
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
            $curso= Curso::find($id);  
            if ($curso != null){
                $curso->delete();
                return redirect('/curso')->with('success','El curso ha sido borrado');
            }else{
                return redirect('/curso')->with('error','El curso no ha sido encontrado');
            }
        }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000) 
                return redirect('/curso')->with('error', $e->getMessage());;
        }
    }
    function matricular($id){
        $curso =  Curso::find($id);
        return view('docente.curso.matricular',compact("curso"));

    }
    function lista($id){
        $curso =  Curso::find($id);
        return view('docente.curso.lista',compact("curso"));

    }
    function seleccionar() {
        return view('docente.curso.seleccionar');
    }
    function agregar_unidad() {
        return view('docente.unidad.agregar_unidad');
    }


}
