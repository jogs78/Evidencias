<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Asignacion extends Model
{
    protected $table='asignaciones';
    protected $fillable = [
        'quien_entrega', 'que_entrega', 'cuando_entrego', 'calificacion', 'observaciones', 'archivo_entregado'

     ];
     public $timestamps =false;

    //
}
