<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenteCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistente_curso', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asistente_id');
            $table->unsignedInteger('curso_id');
            $table->timestamps();
            $table->foreign('asistente_id')->references('id')->on('asistentes');
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistente_curso');
    }
}
