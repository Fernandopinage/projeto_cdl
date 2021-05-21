<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtvCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('TBL_UTVCURSO', function (Blueprint $table) {
            $table->integer('utv_id')->unsigned();              //  id auto incremento
            $table->date('utv_data_inicio');                    // data de inicio do curso
            $table->date('utv_data_final');                     // data de final do curso
            $table->string('utv_titulo',100);                   // titulo do curso 
            $table->string('utv_area_atuacao',100);             // area de atuação 
            $table->string('utv_carga_hora',3);                 // carga hora 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utv_cursos');
    }
}
