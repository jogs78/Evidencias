<?php

namespace App\Policies;
//php artisan make:policy AspectoPolicy

use App\User;
use App\Rubrica;
use App\Aspecto;

use Illuminate\Auth\Access\HandlesAuthorization;

class AspectoPolicy
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
    public function edit(User $authUser, Aspecto $aspecto)
    {
        return $authUser->id == $aspecto->rubrica->autor;
    }

    public function eliminar(User $authUser, Aspecto $aspecto){
        return $authUser->id == $aspecto->rubrica->autor;
    }

}
