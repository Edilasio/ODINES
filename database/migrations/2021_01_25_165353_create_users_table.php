<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('photo')->nullable();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                         
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedInteger('odine_id');
            $table->foreign('odine_id')->references('id')->on('odines');
            $table->unsignedInteger('estado_id'); 
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->unsignedInteger('rol_id')->nullable(); //admite null para facilitaro pedido de um novo usuário
            $table->foreign('rol_id')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
