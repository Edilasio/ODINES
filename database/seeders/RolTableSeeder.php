<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->designacao = "Master";
        $rol->descricao = "Usuário Master";
        $rol->save();

        $rol = new Rol();
        $rol->designacao = "User";
        $rol->descricao = "Usuário Normal";
        $rol->save();

        $rol = new Rol();
        $rol->designacao = "Admin";
        $rol->descricao = "Usuário administrativo";
        $rol->save();

        $rol = new Rol();
        $rol->designacao = "PF";
        $rol->descricao = "Ponto Focal";
        $rol->save();
    }
}
