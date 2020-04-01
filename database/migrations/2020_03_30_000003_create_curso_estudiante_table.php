<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoEstudianteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'curso_estudiante';

    /**
     * Run the migrations.
     * @table curso_estudiante
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('estudiante_id')->unsigned();
            $table->integer('curso_id')->unsigned();

            $table->index(["curso_id"], 'fk_matriculaciones_cursos1_idx');

            $table->index(["estudiante_id"], 'fk_matriculaciones_estudiantes1_idx');


            $table->foreign('estudiante_id', 'fk_matriculaciones_estudiantes1_idx')
                ->references('id')->on('estudiantes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('curso_id', 'fk_matriculaciones_cursos1_idx')
                ->references('id')->on('cursos')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
