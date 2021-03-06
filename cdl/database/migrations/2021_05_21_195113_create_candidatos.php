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

              /*
              $table->string('can_descricao',100);        
              $table->string('can_leitura',100);          
              $table->string('can_escrita',100);          
              $table->string('can_conversacao',100);     
              
              faz relacionamento com tabela idioma o ID do candidato vira chave estrangeira no idioma

              */


            $table->integer('can_id')->unsigned();      //  chave primaria auto incremento
            $table->string('can_foto',250);             //  foto do candidato
            $table->string('can_nome',100);             //  nome do candidado 
            $table->string('can_sobrenome',100);        //  sobrenome do candidado 
            $table->char('can_sexo',1);                 //  sexo
            $table->double('can_altura',2,1);           //  altura do candidato 
            $table->double('can_peso',2,1);             //  peso do candidato 
            $table->string('can_cor',10);               //  COR
            $table->string('can_email',100);            //  Email
            $table->string('can_senha',50);             //  senha
            $table->string('can_celular',14);           //  celular
            $table->string('can_telefone',14);          //  telefone
            $table->date('can_nascimento');             //  data de nascimento
            $table->string('can_localnascimento',10);   //  campo resposnsavel por descrever local do nascimento
            $table->string('can_cpf',14);               //  CPF
            $table->string('can_rg',10);                //  RG

            $table->char('can_experiencia',1);          //  campo responsavel por pergunta se possui experiencia proficinal
            $table->char('can_ex_militar',1);           //  perguntar se o candidado e militar
            $table->string('can_matricula_militar',14); //  Matricula do ex militar
            $table->string('can_unidade_militar',14);   //  unidade militar 
            $table->string('can_preferencia',250);      //  campo referente a prefer??ncia de vagas do candidato

            $table->string('can_cep',8);                //  cep (Obrigatorio)
            $table->string('can_uf',2);                 //  uf (Obrigatorio)
            $table->string('can_cidade',30);            //  cidade
            $table->string('can_bairro',100);           //  bairro   
            $table->string('can_logradouro',100);       //  logradouro
            $table->string('can_numero',10);            //  nuemro da residencia
            $table->string('can_complemento',100);      //  complemento 
            
            $table->char('can_termo',1);                //  LGPD
            $table->char('can_filhos',1);               //   campo responsavel por pergunta se candidado possui filhos
            $table->double('can_salarial',8,2);         //   campo responsavel por prenten??ao salarial
            $table->char('can_status',1);               //  ativo ou inativo


            $table->string('can_descricao',100);        //  campo referente a linguagem   campo formado select
            $table->string('can_leitura',100);          //  campo referente ao nivel de leitura    campo formado select
            $table->string('can_escrita',100);          //  campo referente ao nivel de escrita    campo formado select
            $table->string('can_conversacao',100);      //  campo referente ao nivel de conversa????o campo formado select


            $table->char('can_curso_utv',1);            //  campo onde pergunta se possui curso UTV
            $table->string('can_curso_utv_atuacao',100);//  ??rea de atua????o que curso abrange 
            $table->string('can_curso_utv_titulo',100); //  titulo do campo que foi realizando 
            $table->string('can_curso_utv_horas',10);   //  carga horaria que curso proporcionou
            $table->date('can_curso_utv_anoinicio');   //  data qeu foi inicializado o curso
            $table->date('can_curso_utv_anofinal');   //  data qeu foi emitido o certificado
            $table->date('can_curso_utv_emissao');    // data de emissao de certificado

            $table->string('can_formacao',150);         //  campo referente a forma????o do candidado 
            $table->char('can_fundamental',1);         //  Campo referente se o candidato possua ensino fundamental
          //  $table->date('can_fundamental_ano');      //  Ano de conclus??o do ensino fundamental

          //  $table->char('can_medio',1);              //  Campo referente se o candidato possui ensino m??dio
            $table->char('can_medio_letivo',1);         //  Campo referente saber se aluno est?? no 1?? 2?? e 3??
            $table->date('can_medio_ano');              //  Ano de conclus??o do ensino m??dio
          //  $table->char('can_tecnico',1);            //  Campo referente se o candidato possui ensino t??cnico
            $table->string('can_inst_tecnico',100);     //  Institui????o de ensino t??cnico
            $table->string('can_inst_curso_tecnico',100);// Nome do curso do ensino t??cnico
            $table->char('can_inst_semest_tecnico',1);  // Semestre ensino t??cnico 1?? ou 2??
            $table->date('can_tecnico_anomes');         // campo destinado ano e mes de forma????o 

          //  $table->char('can_superior',1);              //   Campo referente se o candidato possui ensino superior
            $table->string('can_curso_superior',100);   //  Curso do ensino superior
            $table->string('can_periodo_superior',100); //  Per??odo do ensino superior
            $table->string('can_instituicao_superior',100); //  Institui????o do ensino superior
            $table->date('can_superior_ano');           //   Data de t??rmino do ensino superior
          //  $table->char('can_pos',1);                 //  Campo referente a se o candidato possui p??s-gradua????o
            $table->string('can_curso_pos',100);         //  Nome do curso da p??s-gradua????o
            $table->string('can_instituicao_pos',100); // Institui????o da p??s gradua????o
            $table->string('can_periodo_pos',100);     //  Per??odo da p??s gradua????o
            $table->date('can_ano_pos');                //  Data de t??rmino da p??s-gradua????o
            
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
