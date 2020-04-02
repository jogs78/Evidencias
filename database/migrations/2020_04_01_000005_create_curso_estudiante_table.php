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
            $table->unsignedBigInteger('curso_id')->unsigned();
            $table->unsignedBigInteger('estudiante_id')->unsigned();

            $table->index(["curso_id"], 'fk_curso_estudiante_cursos1_idx');

            $table->index(["estudiante_id"], 'fk_curso_estudiante_users1_idx');

            $table->foreign('curso_id', 'fk_curso_estudiante_cursos1_idx')
                ->references('id')->on('cursos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('estudiante_id', 'fk_curso_estudiante_users1_idx')
                ->references('id')->on('users')
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
