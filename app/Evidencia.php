<?php

namespace App;
//php artisan make:model Evidencia
use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    //
    protected $fillable = [
        'dejado_en', 'titulo', 'rubrica_usada', 'unidad', 'fundamentos', 'desarrollo'
    ];
    public $timestamps =false;

    public function rubrica(){
        return $this->belongsTo('App\Rubrica','rubrica_usada')
        ->withDefault(['id'=> 0 , "tipo_de" => "sin rubrica"]);
    } 
    public function curso(){
        return $this->belongsTo('App\Curso','dejado_en')
        ->withDefault(['id'=> 0 , "nombre" => "sin Curso asignado"]);
    }
}
