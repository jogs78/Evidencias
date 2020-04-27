<?php

namespace App\Policies;
//php artisan make:policy EvidenciaPolicy

use App\User;
use App\Evidencia;
use Illuminate\Auth\Access\HandlesAuthorization;

class EvidenciaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function edit(User $authUser, Evidencia $evidencia )
    {
        return $authUser->id == $evidencia->curso->docente->id;
    }

    public function eliminar(User $authUser, Evidencia $evidencia){
        return $authUser->id == $evidencia->curso->docente->id;
        //$no_han_entregado = $rubrica->aspectos->count() == 0;
        //return $le_pertenece  && $no_han_entregado;
    }

}
