<?php

use Illuminate\Database\Seeder;
use App\Model\Eleito\Eleito_Processo;

class EleitoProcessoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eleito_Processo::create([
            'eleito_id' => '1',
            'processo'  => 'Endereoço do processo',
            'descricao' => 'toda a descrição sobre o processo'
        ]);
        Eleito_Processo::create([
            'eleito_id' => '2',
            'processo'  => 'Endereoço do processo',
            'descricao' => 'toda a descrição sobre o processo'
        ]);
        Eleito_Processo::create([
            'eleito_id' => '3',
            'processo'  => 'Endereoço do processo',
            'descricao' => 'toda a descrição sobre o processo'
        ]);
        Eleito_Processo::create([
            'eleito_id' => '4',
            'processo'  => 'Endereoço do processo',
            'descricao' => 'toda a descrição sobre o processo'
        ]);
        Eleito_Processo::create([
            'eleito_id' => '5',
            'processo'  => 'Endereoço do processo',
            'descricao' => 'toda a descrição sobre o processo'
        ]);
        Eleito_Processo::create([
            'eleito_id' => '6',
            'processo'  => 'Endereoço do processo',
            'descricao' => 'toda a descrição sobre o processo'
        ]);
    }
}
