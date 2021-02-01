<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigacaos', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('designacao');
            $table->string('descricao');
            $table->date('datacriacao');
            $table->date('dataenvio')->nullable();            
            $table->timestamps();

            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investigacaos');
    }
}
