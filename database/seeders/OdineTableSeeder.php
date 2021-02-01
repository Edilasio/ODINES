<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Odine;

class OdineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entity = new Odine();
        $entity->designacao = "Instituto Nacional de Estatística";
        $entity->sigla = "INE";
        $entity->email = "ine@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério da Agricultura";
        $entity->sigla = "MINAGRI";
        $entity->email = "minagri@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério de Hotelaria e Turismo";
        $entity->sigla = "MINHOTUR";
        $entity->email = "minhotur@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério da Saúde";
        $entity->sigla = "MINSA";
        $entity->email = "minsa@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério da Administração Pública, Trabalho e Segurança Social";
        $entity->sigla = "MAPTSS";
        $entity->email = "maptss@gov.co.ao"; 
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério dos Petróleos";
        $entity->sigla = "MINPET";
        $entity->email = "minpet@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério das Pescas";
        $entity->sigla = "MINPESCAS";
        $entity->email = "minpescas@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério da Educação";
        $entity->sigla = "MED";
        $entity->email = "med@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério da Assistência e Reinserção Social";
        $entity->sigla = "MINARS";
        $entity->email = "minars@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();
        
        $entity = new Odine();
        $entity->designacao = "Ministério";
        $entity->sigla = "MES";
        $entity->email = "mes@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério do Transporte";
        $entity->sigla = "MINTRANS";
        $entity->email = "mintrans@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();

        $entity = new Odine();
        $entity->designacao = "Ministério da Justiça e dos Direitos Humanos";
        $entity->sigla = "MJDH";
        $entity->email = "mjdh@gov.co.ao";
        $entity->estado_id = 1;
        $entity->save();
    }
}
