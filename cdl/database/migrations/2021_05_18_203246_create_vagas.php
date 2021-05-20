<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_VAGAS', function (Blueprint $table) {
            $table->integer('vag_id')->unsigned();      // id auto increment
            $table->date('vag_data_inicio');            // data de inicio da publicação vaga
            $table->date('vag_data_final');             // data final da publicação vaga  
            $table->string('vag_cargo',100);            // cargo ou função da vaga 
            $table->string('vag_tipo',100);             // tipo de vaga se é temporario ,menor aprediz, estágio ou trainee
            $table->char('vag_opcao',100);              // opão para vaga é remoto       
            $table->char('vag_oculta',1);               // ocultar empresa  (obrigatprio)     
            $table->char('vag_formacao');               // possui formação necessaria [ensino fundamental completo]
            $table->char('vag_experiencia',1);          // Possui experiencia ?  [com experiencia ] [sem experiencia]   
            $table->string('vag_tempo',100);            // tempo de experiencia [3 meses ] [6 meses] [1 ano ] ..etc
            $table->string('vag_cidade',100);           // cidade da vaga (obrigatorio)
            $table->string('vag_uf',2);                 // uf da vaga (obrigatorio)
            $table->string('vag_bairro',100);           // bairro da vaga 
            $table->string('vag_descricao',100);        // descrição da vaga 
            $table->string('vag_idioma',100);           // idioma necessario
            $table->string('vag_salario',100);          // salario  da vaga
            $table->string('vag_pcd',1);                // se possui deficiencia 
            $table->string('vag_pcd_descricao',100);    // caso possua deficiencia campo para descrever       
            

            
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
        Schema::dropIfExists('vagas');
    }
}
