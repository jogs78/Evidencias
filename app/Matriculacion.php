<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriculacion extends Model
{
    protected $table='curso_estudiante';
    protected $fillable = [
         'curso_id', 'estudiante_id'
     ];
     public $timestamps =false;

    //
}
