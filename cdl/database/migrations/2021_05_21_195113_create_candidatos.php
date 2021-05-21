<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            // candidato

        Schema::create('TBL_CANDIDATOS', function (Blueprint $table) {
            $table->integer('can_id')->unsigned();      //  chave primaria auto incremento
            $table->string('can_nome',100);             //  nome do candidado 
            $table->string('can_sobrenome',100);        //  sobrenome do candidado 
            $table->char('can_sexo',1);                 //  sexo
            $table->double('can_altura',2,1);
            $table->string('can_cor',10);               //  COR
            $table->string('can_email',100);            //  Email
            $table->string('can_senha',50);             //  senha
            $table->string('can_celular',14);           //  celular
            $table->string('can_telefone',14);          //  telefone
            $table->date('can_nascimento');             //  data de nascimento
            $table->string('can_cpf',14);               //  CPF
            $table->string('can_rg',10);                //  RG
            $table->char('can_experiencia',1);          //  campo responsavel por pergunta se possui experiencia proficinal 
            $table->string('can_localnascimento',10);   //  campo resposnsavel por descrever local do nascimento
            $table->string('can_cep',8);                //  cep (Obrigatorio)
            $table->string('can_cidade',20);            //  cidade
            $table->string('can_bairro',100);           //  bairro   
            $table->string('can_logradouro',100);       //  logradouro
            $table->string('can_numero',10);            //  nuemro da residencia
            $table->string('can_complemento',100);      //  complemento 
            $table->char('can_termo',1);                //  LGPD
            $table->char('can_filhos',1);               //   campo responsavel por pergunta se candidado possui filhos
            $table->double('can_salarial',8,2);         //   campo responsavel por prentençao salarial
            $table->char('can_status',1);               //  ativo ou inativo
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
        Schema::dropIfExists('candidatos');
    }
}
