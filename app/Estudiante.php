<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends User
{
    protected $table='users';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('rol', function (Builder $builder) {
            $builder->where('rol', '=', 'estudiante');
        });
    }
    public function cursos_actuales(){
        $hoy = date("Y-m-d");
        return $this->belongsToMany('App\Curso','curso_estudiante','estudiante_id', 'curso_id')
        ->where('fecha_inicio', '<=', $hoy)
        ->where('fecha_fin', '>=', $hoy);
    }
    public function cursos_pasados(){
        $hoy = date("Y-m-d");
        return 
        $this->belongsToMany('App\Curso','curso_estudiante','estudiante_id', 'curso_id')
        ->withPivot('calificacion_final')
        ->where('fecha_fin', '<', $hoy);
    }
    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_estudiante','estudiante_id', 'curso_id');
    }

}
