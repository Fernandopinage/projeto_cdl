<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_CARGOS', function (Blueprint $table) {
            $table->integer('car_id')->unsigned();          // id auto increment
            $table->string('car_nome',100);             // nome do cargo
            $table->string('car_descricao',100);        // descricao do cargo
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
        Schema::dropIfExists('cargos');
    }
}
