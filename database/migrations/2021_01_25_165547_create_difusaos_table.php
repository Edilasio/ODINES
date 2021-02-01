<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDifusaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difusaos', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('designacao');
            $table->string('entidade');            
            $table->string('periodo_referencia');
            $table->string('periodicidade');
            $table->date('data_colocacao');            
            $table->date('data_disp_papel');
            $table->string('custo_impressao');
            $table->string('descricao');
            $table->string('caea');
            $table->string('publicacao');
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
        Schema::dropIfExists('difusaos');
    }
}
