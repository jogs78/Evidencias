<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Curso' => 'App\Policies\CursoPolicy',
        'App\Rubrica' => 'App\Policies\RubricaPolicy',
        'App\Aspecto' => 'App\Policies\AspectoPolicy',
        'App\Evidencia' => 'App\Policies\EvidenciaPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
