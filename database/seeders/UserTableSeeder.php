<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Patricia";
        $user->lastname = "Aline";
        $user->email = "patricia.aline@ine.gov.ao"; 
        $user->password = Hash::make("graciana");
        $user->estado_id = 1;
        $user->odine_id = 1;
        $user->rol_id = 3;
        $user->save();
        /*
        $user = new User();
        $user->name = "Edilasio";
        $user->lastname = "Vieira";
        $user->email = "edilasio.vieira@gmail.com";
        $user->password = Hash::make("graciana");
        $user->estado_id = 1;
        $user->odine_id = 2;
        $user->rol_id = 1;
        $user->save();
        
        $user = new User();
        $user->name = "Alberto";
        $user->lastname = "Paulo";
        $user->email = "alberto.paulo@gmail.com";
        $user->password = Hash::make("graciana");
        $user->estado_id = 1;
        $user->odine_id = 2;
        $user->rol_id = 2;
        $user->save();
        
        $user = new User();
        $user->name = "Avelino";
        $user->lastname = "Gonzaga";
        $user->email = "avelino.gonzaga@gmail.com";
        $user->password = Hash::make("graciana");
        $user->estado_id = 2;
        $user->odine_id = 3;
        $user->rol_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Gilda";
        $user->lastname = "Luís";
        $user->email = "gilda.luis@gmail.com";
        $user->password = Hash::make("graciana");
        $user->estado_id = 6;
        $user->odine_id = 3;
        $user->rol_id = 2;
        $user->save(); 
        */
    }
}
