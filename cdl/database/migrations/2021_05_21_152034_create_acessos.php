<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // acessos

        Schema::create('TBL_ACESSOS', function (Blueprint $table) {
            $table->integer('ace_id')->unsigned();      //  chave primaria auto incremento
            $table->string('ace_email',100);            //  email para acessar 
            $table->string('ace_senha',30);             //  senha para acessar
            $table->char('ace_status',1);               //  status do acesso
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
        Schema::dropIfExists('acessos');
    }
}
