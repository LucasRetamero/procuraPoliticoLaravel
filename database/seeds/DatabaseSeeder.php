<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(GrupoTableSeeder::class);
        $this->call(PartidoTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(EleitoTableSeeder::class);
        $this->call(EleitoAcademicoTableSeeder::class);
        $this->call(EleitoBiografiaTableSeeder::class);
        $this->call(EleitoMandatoTableSeeder::class);
        $this->call(EleitoProcessoTableSeeder::class);
        $this->call(EleitoProfissaoTableSeeder::class);
        $this->call(EleitoProjetoTableSeeder::class);
    }
}
