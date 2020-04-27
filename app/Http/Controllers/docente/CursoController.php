<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Curso;

class CursoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //sin este middleware el controlador se ejecutaria
        // aún cuando no exista sesion (si no ahy alguien activo)
    }

    /**
     * Muestra el listado de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cursos = Curso::all()->where('docente_id','=',Auth::user()->id);
        return view('docente.curso.listar_cursos', compact('cursos'));
    }

    /**
     * Muestra el formulario para crear el nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.curso.agregar');
    }

    /**
     * Guarda los datos del nuevo recurso a crear.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso;
        $curso->fill($request->all());
        $curso->docente_id = Auth::user()->id;
        $curso->save();
        return redirect('/curso')->with('success','El curso ha sido creado');;
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
        $this->authorize('edit', $curso);
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
        return redirect('/curso')->with('success','El curso ha sido actualizado');;
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
        $hoy = date("Y-m-d");
        $cursos  = Curso::
        where("fecha_inicio","<=",$hoy)
        ->where("fecha_fin",">=",$hoy)
        ->where('docente_id','=',Auth::user()->id)
        ->get();

        $activo  = Curso::
        where("fecha_inicio","<=",$hoy)
        ->where("fecha_fin",">=",$hoy)
        ->where('docente_id','=',Auth::user()->id)
        ->where('activo', 1)
        ->first();

        \Session::put('activo' ,  $activo );
        return view('docente.curso.seleccionar',compact("cursos","activo"));
    }
    function agregar_unidad() {
        return view('docente.unidad.agregar_unidad');
    }

    function activar($id){
        try {
            DB::beginTransaction();
            Curso::where('activo', 1)->update(['activo' => 0]);
            $curso =  Curso::find($id);
            $curso->activo = 1;
            $curso->save();
            \Session::put('activo' ,  $curso );
            DB::commit();
            return redirect("/seleccionar")->with("success","Grupo $curso->grupo activado");
        } catch (\Exception $e) {
            $error = $e->getMessage();
            DB::rollback();
            return redirect("/seleccionar")->with("error","No se pudo activar el grupo por: $error");
        }
    } 


}
