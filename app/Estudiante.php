<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'control', 'nombre', 'apellidos'
     ];
     public $timestamps =false;
 }
