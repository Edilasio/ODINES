<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logotipo')->nullable();            
            $table->string('designacao');
            $table->string('sigla');
            $table->string('email', 100)->unique();
            $table->integer('telefone')->nullable();
            $table->string('pessoa_contacto')->nullable();
            $table->string('descricao')->nullable();
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
        Schema::dropIfExists('odines');
    }
}
