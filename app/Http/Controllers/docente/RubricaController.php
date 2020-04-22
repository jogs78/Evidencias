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
/*
        $datos = $request->all();
        var_dump($datos);
        return;
        */
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




    function crear_criterio() {
        return view('docente.rubricas.crear_criterio');
    }
    
    

}
