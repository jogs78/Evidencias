<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudiante;
class Matriculacion extends Model
{
    protected $table='curso_estudiante';
    protected $fillable = [
          'curso_id', 'estudiante_id', 'calificacion_final', 'equipo'
     ];
     public $timestamps =false;

     public function estudiante()
     {
         return $this->hasOne('App\Estudiante', 'id', 'estudiante_id');
     } 
 }
