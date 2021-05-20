<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_EMPRESAS', function (Blueprint $table) {
            $table->integer('emp_id')->unsigned();
            $table->string('emp_logo',100);             // logo da empresa 
            $table->string('emp_fantasia',100);         // nome fantasia da empresa
            $table->string('emp_razao',100);            // razao da empresa (obrigatorio)
            $table->string('emp_cnpj',14)->unique();              // cnpj da empresa (obrigatorio)
            $table->string('emp_atividade',100);        // Área de atividade (obrigatorio)
            $table->string('emp_telefone',14);          // Telefone da empresa
            $table->string('emp_celular',14);           // Celular da empresa
            $table->string('emp_cep',8);                // CEP da empresa[autocompletar endereço pelo CEP] (obrigatorio)
            $table->string('emp_logrador',100);         // Logradouro
            $table->string('emp_numero',10);            // Nº endereço da empresa 
            $table->string('emp_bairro',100);           // Bairro da empresa
            $table->string('emp_cidade',100);           // Cidade da empresa
            $table->string('emp_uf',2);                 // UF da empresa 
            $table->string('emp_nome_contato',50);      // Nome do contato da empresa (obrigatorio)
            $table->string('emp_email_contato',100);    // email do contato da empresa (obrigatorio)

            //$table->string('emp_funcao',100);         // chave estrangeira  de função/cargo
            //$table->string('emp_setor',100);          // chave estrangeira  de setor/departamento

            $table->string('emp_chack_assoc',100);      // Associado CDL manaus? campo check | caso check aparecer campo para preencher codigo
            $table->string('emp_cod_assoc',20);         // campo para preencher codigo caso check box seja preenchido 
            $table->string('emp_senha',20);             // definir a senha de acesso (obrigatorio)
            $table->string('emp_termo',1);              // check com politica de termo de dados do site. (obrigatorio)
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
        Schema::dropIfExists('empresas');
    }
}
