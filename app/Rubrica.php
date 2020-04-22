<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Rubrica extends Model
{
    protected $fillable = [
        'tipo_de', 'autor' 
     ];
     public $timestamps =false;

     public function aspectos(){
        return $this->hasMany('App\Aspecto');
    }

}
