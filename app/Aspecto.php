<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Aspecto extends Model
{
    protected $fillable = [
        'criterio', 'ponderacion', 'aceptacion_optima', 'aceptacion_media', 'aceptacion_nula'
       // 'criterio', 'explicacion', 'ponderacion', 'rubrica_id'
     ];
     public $timestamps =false;

}
