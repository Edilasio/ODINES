<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Estado();
        $status->designacao = "Activo";
        $status->descricao = "Activa uma entidade";
        $status->save();

        $status = new Estado();
        $status->designacao = "Inactivo";
        $status->descricao = "Desativa uma entidade";
        $status->save();

        $status = new Estado();
        $status->designacao = "Aprovado";
        $status->descricao = "Aprovado por uma entidade";
        $status->save();

        $status = new Estado();
        $status->designacao = "Rejeitado";
        $status->descricao = "Rejeitado por uma entidade";
        $status->save();

        $status = new Estado();
        $status->designacao = "Enviado";
        $status->descricao = "Processo enviado";
        $status->save();

        $status = new Estado();
        $status->designacao = "Pendente";
        $status->descricao = "Espera de uma acção";
        $status->save();

        $status = new Estado();
        $status->designacao = "Concluido";
        $status->descricao = "Processo concluido";
        $status->save();
    }
}
