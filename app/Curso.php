<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Builder;



class Curso extends Model
{
    /*En este caso no tenemos problema la tabla en la base de datos se llama cursos pero si se llamase
    de otra forma por ejemplo lugares el modelo debiese llamarse Lugare, recordemos que la tabla que buscará 
    es con el nombre del modelo en minúsculas y en plural */
	protected $table='cursos';  //esta linea esta de mas
    /* estos son los campos de la tabla que se veran afectados cuando usemos el metodo fill, como el 
    id es autoincremental no se necesita aqui*/
    protected $fillable = [
        'periodo', 'grupo', 'nombre', 'fecha_inicio', 'fecha_fin',
        'descripcion', 'unidades', 'activo', 'docente_id'
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

    public function estudiantes()
    {
        return $this->belongsToMany('App\User','curso_estudiante','curso_id', 'estudiante_id')
        ->withPivot('id');
    }

    public function docente(){
        //return $this->belongsTo('App\Docente');
        /*
        si uso return $this->hasOne('App\Docente'); daría un error: que esperaria que la tabla docente tenga el campo 'docentes.curso_id' 
        y en sus convenciones busca: select * from `docentes` where `docentes`.`curso_id` = 2 and `docentes`.`curso_id` is not null limit 1
        pero pero la relacion es un docente tiene un curso 
        */
        return $this->belongsTo('App\User');
    }
    public function evidencias(){
        return $this->hasMany('App\Evidencia','dejado_en');
    }

    public function no_matriculados(){
        return Estudiante::whereDoesntHave('cursos', function (Builder $query) {
            $query->where('curso_id', $this->id );
        })->get();

    }



}
