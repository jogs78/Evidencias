<?php

namespace App\Policies;
//php artisan make:policy RubricaPolicy

use App\User;
use App\Rubrica;

use Illuminate\Auth\Access\HandlesAuthorization;

class RubricaPolicy
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
    public function edit(User $authUser, Rubrica $rubrica )
    {
        return $authUser->id == $rubrica->autor;
    }

}
