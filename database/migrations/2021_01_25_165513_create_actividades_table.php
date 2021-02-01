<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('designacao');
            $table->string('entidade');
            $table->string('unidade_observada');
            $table->String('variavel_observada');
            $table->string('periodo_referencia');
            $table->string('periodicidade');
            $table->string('unidade_observacao');
            $table->string('nivel_desag_geografica');
            $table->date('data_disp_publico');
            $table->string('descricao');
            $table->String('ende');
            $table->string('caea');
            $table->string('justificacao')->nullable();
            $table->string('estatistica');
            $table->string('comentario1')->nullable();
            $table->string('comentario2')->nullable();
            $table->timestamps();

            $table->unsignedInteger('investigacao_id');
            $table->foreign('investigacao_id')->references('id')->on('investigacaos')->onDelete('cascade');                      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
