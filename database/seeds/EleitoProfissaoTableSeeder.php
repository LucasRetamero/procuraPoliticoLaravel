<?php

use Illuminate\Database\Seeder;
use App\Model\Eleito\Eleito_Profissao;

class EleitoProfissaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eleito_Profissao::create([
            'eleito_id' => '1',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '1',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '2',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '2',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '3',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '3',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '4',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '4',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '5',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '5',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '6',
            'nome'      => 'Engenheiro',
        ]);
        Eleito_Profissao::create([
            'eleito_id' => '6',
            'nome'      => 'Engenheiro',
        ]);
    }
}
