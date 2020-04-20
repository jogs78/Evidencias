<?php

namespace App\Policies;

use App\User;
use App\Curso;
use Illuminate\Auth\Access\HandlesAuthorization;

class CursoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    //para saber si puede editar, el primer parametro es el usuario que actualmente esta usando el sistema
    //puede dependiendo del resultado, si retorna true o false
    public function edit(User $authUser, Curso $materia )
    {
        return $authUser->id == $materia->docente_id;
    }

    public function eliminar(User $authUser, Curso $materia){
        $le_pertenece = $authUser->id == $materia->docente_id;
        $esta_vacia = $materia->estudiantes->count() == 0;
        return $le_pertenece  && $esta_vacia;
    }
}
