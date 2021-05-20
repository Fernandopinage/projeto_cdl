<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_FUNCIONARIOS', function (Blueprint $table) {
            $table->integer('fun_id')->unsigned();      //  chave primaria auto incremento
            $table->string('fun_nome',100);             //  nome do funcionario     
            $table->string('fun_sobrenome',100);        //  sobre nome do funcionario
            $table->string('fun_email',100);            //  email   
            $table->string('fun_senha',100);            //  senha cryptografada 
            $table->char('fun_sexo',1);                 // sexo do funcionario
            $table->string('fun_cep',8);                // cep (Obrigatorio)
            $table->string('fun_cidade',20);            // cidade
            $table->string('fun_bairro',100);           // bairro   
            $table->string('fun_logradouro',100);       // logradouro
            $table->string('fun_numero',10);            // nuemro da residencia
            $table->string('fun_complemento',100);      // complemento 
            //$table->integer('contato_id')->unsigned();             //  chave estrangeira tabela administrativa
            // $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('funcionarios');
    }
}
