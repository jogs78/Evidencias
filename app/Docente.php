<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Docente extends User
{
    protected $table='users';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('rol', function (Builder $builder) {
            $builder->where('rol', '=', 'docente');
        });
    }

}
