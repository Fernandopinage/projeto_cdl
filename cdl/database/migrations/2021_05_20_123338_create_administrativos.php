<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_ADM', function (Blueprint $table) {
            $table->integer('adm_id')->unsigned();      //  chave primaria 
            $table->string('adm_perfil',20);            //  tipo de perfil (administrativo, colaborador..et ) (Obrigatorio)
            $table->string('adm_descricao',100);         //  descrição do perfil 
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
        Schema::dropIfExists('administrativos');
    }
}
