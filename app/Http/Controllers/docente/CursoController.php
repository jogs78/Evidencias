<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('docente.curso.listar_cursos', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.curso.agregar');    }

    /**
     * Store a newly created resource in storage.
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso =  Curso::find($id);
        echo $curso->toString();

    }

    /**
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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
