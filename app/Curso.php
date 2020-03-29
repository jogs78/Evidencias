<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Curso extends Model
{
    /*En este caso no tenemos problema la tabla en la base de datos se llama cursos pero si se llamase
    de otra forma por ejemplo lugares el modelo debiese llamarse Lugare, recordemos que la tabla que buscará 
    es con el nombre del modelo en minúsculas y en plural */
	protected $table='cursos';  //esta linea esta de mas
    /* estos son los campos de la tabla que se veran afectados cuando usemos el metodo fill, como el 
    id es autoincremental no se necesita aqui*/
    protected $fillable = [
       'periodo', 'grupo', 'nombre', 'fecha_inicio', 'fecha_fin', 'descripcion', 'unidades', 'activo'
    ];
    /* en este caso le decimos que no queremos usar los campos created_at ni updated_at */
    public $timestamps =false;
    /** funcion que determina si un curso es actual "de este semetre" */
    public function historico(){
        $hoy = date("Y-m-d");
        if( $this->fecha_inicio <= $hoy &&  $hoy >= $this->fecha_fin ) return true;
        return false;
    }
    public function _periodo(){
        $agno = substr ( $this->fecha_inicio , 0, 4 );
        $mes  = substr ( $this->fecha_inicio , 5, 2 );
        if ($mes <6 ) $Periodo = "Enero - Junio de $agno";
        else $Periodo = "Agosto - Diciembre de $agno";
        return $Periodo;
    }
}
