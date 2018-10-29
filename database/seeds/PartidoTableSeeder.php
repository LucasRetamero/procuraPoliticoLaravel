<?php

use Illuminate\Database\Seeder;
use App\Model\Eleito\Partido;

class PartidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partido::create([
            'nome' => 'AVANTE'
        ]);
        Partido::create([
            'nome' => 'DEM'
        ]);
        Partido::create([
            'nome' => 'MDB'
        ]);
        Partido::create([
            'nome' => 'PATRI'
        ]);
        Partido::create([
            'nome' => 'PCdoB'
        ]);
        Partido::create([
            'nome' => 'PDT'
        ]);
        Partido::create([
            'nome' => 'PHS'
        ]);
        Partido::create([
            'nome' => 'PODE'
        ]);
        Partido::create([
            'nome' => 'PP'
        ]);
        Partido::create([
            'nome' => 'PPL'
        ]);
        Partido::create([
            'nome' => 'PPS'
        ]);
        Partido::create([
            'nome' => 'PR'
        ]);
        Partido::create([
            'nome' => 'PRB'
        ]);
        Partido::create([
            'nome' => 'PROS'
        ]);
        Partido::create([
            'nome' => 'PRTB'
        ]);
        Partido::create([
            'nome' => 'PSB'
        ]);
        Partido::create([
            'nome' => 'PSC'
        ]);
        Partido::create([
            'nome' => 'PSD'
        ]);
        Partido::create([
            'nome' => 'PSDB'
        ]);
        Partido::create([
            'nome' => 'PSL'
        ]);
        Partido::create([
            'nome' => 'PSOL'
        ]);
        Partido::create([
            'nome' => 'PT'
        ]);
        Partido::create([
            'nome' => 'PTB'
        ]);
        Partido::create([
            'nome' => 'PV'
        ]);
        Partido::create([
            'nome' => 'REDE'
        ]);
        Partido::create([
            'nome' => 'S.PART.'
        ]);
        Partido::create([
            'nome' => 'SD'
        ]);
    }
}
