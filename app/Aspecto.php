<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Aspecto extends Model
{
    protected $fillable = [
        'rubrica_id', 'criterio', 'ponderacion', 'aceptacion_optima', 'aceptacion_media', 'aceptacion_nula'
     ];
     public $timestamps =false;

     public function rubrica(){
        return $this->belongsTo('App\Rubrica')
        ->withDefault(['id'=> 0 , "tipo_de" => "sin rubrica"]);
    } 
}
