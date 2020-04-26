<?php

namespace App\Http\Controllers\docente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

use App\Rubrica;


class RubricaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //sin este middleware el controlador se ejecutaria
        // aún cuando no existe sesion (si no ahy alguien activo)
    }

    /**
     * Muestra el listado de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubricas = Rubrica::all()->where('autor','=',Auth::user()->id);
        return view('docente.rubricas.listar_rubricas', compact('rubricas'));
    }

    /**
     * Muestra el formulario para crear el nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.rubricas.crear_rubrica');
    }
    /**
     * Guarda los datos del nuevo recurso a crear.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rubrica = new Rubrica;
        $rubrica->fill($request->all());
        $rubrica->autor = Auth::user()->id;
        $rubrica->save();
        return redirect('/rubrica')->with('success','La rubrica ha sido creada');;
    }
    /**
     * Muestra el recurso espedificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rubrica =  Rubrica::find($id);
        echo $rubrica->toJson();
    }
    /**
     * Muestra para editar el recurso espedificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rubrica =  Rubrica::find($id);
        $this->authorize('edit', $rubrica);
        return view('docente.rubricas.editar_rubrica', compact("rubrica"));
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
        $rubrica =  Rubrica::find($id);
        $rubrica->fill($request->all());
        $rubrica->save();
        return redirect('/rubrica')->with('success','La rubrica ha sido actualizada');;
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
            $rubrica= Rubrica::find($id);  
            if ($rubrica != null){
                $rubrica->delete();
                return redirect('/rubrica')->with('success','La rubrica ha sido borrada');
            }else{
                return redirect('/rubrica')->with('error','La rubrica no ha sido encontrada');
            }
        }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000) 
                return redirect('/rubrica')->with('error', $e->getMessage());;
        }
    }

    
    

}
