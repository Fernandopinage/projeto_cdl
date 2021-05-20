<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_DEPARTAMENTO', function (Blueprint $table) {
            $table->integer('dep_id')->unsigned();      // id auto increment
            $table->string('dep_nome',100);             // nome do departamento
            $table->string('dep_descricao',100);        // descrição do derpatamento
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
        Schema::dropIfExists('departamentos');
    }
}
