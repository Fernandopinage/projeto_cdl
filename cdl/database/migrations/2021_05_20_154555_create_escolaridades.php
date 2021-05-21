<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaridades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                // escolaridade
                

        Schema::create('TBL_ESCOLARIDADE', function (Blueprint $table) {
            $table->integer('esc_id')->unsigned();      //  chave primaria auto incremento
            $table->string('esc_fundamental',10);       //  selecionar se possui ensino fundamental(completo/incompleto)
            $table->date('esc_fund_ano');               //  ano de conclusão 
            $table->char('esc_medio',1);                //  checkbox seleciona se possui ensino medio
            $table->string('esc_medio_curso',100);      //  cuso do ensino medio 
            $table->date('esc_medio_ano');              //  ano de conclusão 
            $table->char('esc_tecnico',1);              //  checkbox seleciona se possui curso tecnico  
            $table->string('esc_tecnico_inst',100);     //  nome da instituição do curso tecnico  
            $table->string('esc_tecnico_curso',100);    //  nome do curso   
            $table->date('esc_tecnico_ano');            //  ano de conclusão do curso tecnico         
            $table->char('esc_super',1);                //  checkbox seleciona se possui curso curso superior  
            $table->string('esc_super_inst',100);       //  nome da instituição do curso curso superior  
            $table->string('esc_super_curso',100);      //  nome do curso  superior 
            $table->date('esc_super_ano');              //  ano de conclusão do curso superior   
            $table->char('esc_pos',1);                  //  checkbox seleciona se possui pos graduação
            $table->string('esc_pos_inst',100);         //  nome da instituição do curso pos graduação
            $table->string('esc_pos_curso',100);        //  cuso da pos 
            $table->date('esc_pos_ano');                //  ano de da pos conclusão             
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
        Schema::dropIfExists('escolaridades');
    }
}
