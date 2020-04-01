<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cursos';

    /**
     * Run the migrations.
     * @table cursos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('periodo', 45)->nullable();
            $table->string('grupo', 45)->nullable();
            $table->string('nombre', 45)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->integer('unidades')->nullable();
            $table->boolean('activo')->nullable()->default('0');
            $table->integer('docente_id')->unsigned()->nullable()->default(null);

            $table->index(["docente_id"], 'fk_cursos_docentes1_idx');


            $table->foreign('docente_id', 'fk_cursos_docentes1_idx')
                ->references('id')->on('docentes')
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
