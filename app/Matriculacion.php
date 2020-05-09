<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudiante;
class Matriculacion extends Model
{
    protected $table='curso_estudiante';
    protected $fillable = [
         'curso_id', 'estudiante_id'
     ];
     public $timestamps =false;

     public function estudiante()
     {
         return $this->hasOne('App\Estudiante', 'id', 'estudiante_id');
     } 
 }
