<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custos', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('designacao');
            $table->integer('dc_custo_fisico');
            $table->integer('ts_custo_fisico');
            $table->integer('t_custo_fisico');
            $table->integer('tm_custo_fisico');
            $table->integer('ad_outro_custo_fisico');
            $table->integer('dc_custo_financeiro');
            $table->integer('ts_custo_financeiro');
            $table->integer('t_custo_financeiro');
            $table->integer('tm_custo_financeiro');
            $table->integer('ad_outro_custo_financeiro');
            $table->integer('outro_custo_financeiro_directo');
            $table->integer('outro_custo_financeiro_ind');
            $table->string('caea');
            $table->string('ende');
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
        Schema::dropIfExists('custos');
    }
}
