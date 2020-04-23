<?php

namespace App\Policies;
//php artisan make:policy AspectoPolicy

use App\User;
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
}
