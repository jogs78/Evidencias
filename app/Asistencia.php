<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Asistencia extends Model
{
    protected $fillable = [
        'matriculacion', 'fecha','asistencia'
     ];
     public $timestamps =false;

     public function matriculacion(){
        return $this->belongsTo('App\Matriculacion','matriculacion');
    }

}
