<?php

use Illuminate\Database\Seeder;
use App\Model\Eleito\Grupo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
        'nome' => 'Presidente'
        ]);
        Grupo::create([
        'nome' => 'Deputado Federal'
        ]);
        Grupo::create([
        'nome' => 'Senador'
        ]);
        Grupo::create([
        'nome' => 'Governador'
        ]);
        Grupo::create([
        'nome' => 'Deputado Estadual'
        ]);
        Grupo::create([
        'nome' => 'Vereador'
        ]);
    }
}
