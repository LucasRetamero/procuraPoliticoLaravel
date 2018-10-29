<?php

use Illuminate\Database\Seeder;
use App\Model\Eleito\Eleito;

class EleitoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Eleito::create([
        'partido_id'   => '1',
        'grupo_id'     => '1',
        'imagem'       => 'http://www.senado.gov.br/senadores/img/fotos-oficiais/senador4558.jpg',
        'nome'         => 'Gladson de Lima Cameli',
        'naturalidade' => 'Cruzeiro do Sul (AC)',
        'nascimento'   => '1978-03-26',
        'sexo'         => 'Masculino',
        'estado'       =>  'SP',
        'gabinete'     => 'Senado Federal Anexo 2 Ala Teotônio Vilela Gabinete 14',
        'telefone'     => '(61) 3303-1357 / 1367',
        'email'        => 'gladson.cameli@senador.leg.br',
        'site'         => 'http://www.senado.leg.br/senadores/senador/GladsonCameli/Default.asp',
        'escritorio'   => 'AVENIDA TRAVESSA BOA VISTA, 111. ISAURA PARENTE, RIO BRANCO, AC. CEP:69918306',
        'escolaridade' => 'Ensino Superior Completo',
        'status'       => 'Presidente'       
      ]);

      Eleito::create([
        'partido_id'   => '1',
        'grupo_id'     => '2',
        'imagem'       => 'http://www.senado.gov.br/senadores/img/fotos-oficiais/senador4558.jpg',
        'nome'         => 'Gladson de Lima Cameli',
        'naturalidade' => 'Cruzeiro do Sul (AC)',
        'nascimento'   => '1978-03-26',
        'sexo'         => 'Masculino',
        'estado'       =>  'SP',
        'gabinete'     => 'Senado Federal Anexo 2 Ala Teotônio Vilela Gabinete 14',
        'telefone'     => '(61) 3303-1357 / 1367',
        'email'        => 'gladson.cameli@senador.leg.br',
        'site'         => 'http://www.senado.leg.br/senadores/senador/GladsonCameli/Default.asp',
        'escritorio'   => 'AVENIDA TRAVESSA BOA VISTA, 111. ISAURA PARENTE, RIO BRANCO, AC. CEP:69918306',
        'escolaridade' => 'Ensino Superior Completo',
        'status'       => 'Deputado Federal'
      ]);

      Eleito::create([
        'partido_id'   => '1',
        'grupo_id'     => '3',
        'imagem'       => 'http://www.senado.gov.br/senadores/img/fotos-oficiais/senador4558.jpg',
        'nome'         => 'Gladson de Lima Cameli',
        'naturalidade' => 'Cruzeiro do Sul (AC)',
        'nascimento'   => '1978-03-26',
        'sexo'         => 'Masculino',
        'estado'       =>  'SP',
        'gabinete'     => 'Senado Federal Anexo 2 Ala Teotônio Vilela Gabinete 14',
        'telefone'     => '(61) 3303-1357 / 1367',
        'email'        => 'gladson.cameli@senador.leg.br',
        'site'         => 'http://www.senado.leg.br/senadores/senador/GladsonCameli/Default.asp',
        'escritorio'   => 'AVENIDA TRAVESSA BOA VISTA, 111. ISAURA PARENTE, RIO BRANCO, AC. CEP:69918306',
        'escolaridade' => 'Ensino Superior Completo',
        'status'       => 'Senador'     
      ]);

    
      Eleito::create([
        'partido_id'   => '1',
        'grupo_id'     => '4',
        'imagem'       => 'http://www.senado.gov.br/senadores/img/fotos-oficiais/senador4558.jpg',
        'nome'         => 'Gladson de Lima Cameli',
        'naturalidade' => 'Cruzeiro do Sul (AC)',
        'nascimento'   => '1978-03-26',
        'sexo'         => 'Masculino',
        'estado'       =>  'SP',
        'gabinete'     => 'Senado Federal Anexo 2 Ala Teotônio Vilela Gabinete 14',
        'telefone'     => '(61) 3303-1357 / 1367',
        'email'        => 'gladson.cameli@senador.leg.br',
        'site'         => 'http://www.senado.leg.br/senadores/senador/GladsonCameli/Default.asp',
        'escritorio'   => 'AVENIDA TRAVESSA BOA VISTA, 111. ISAURA PARENTE, RIO BRANCO, AC. CEP:69918306',
        'escolaridade' => 'Ensino Superior Completo',
        'status'       => 'Governador'       
      ]);
    
      
      Eleito::create([
        'partido_id'   => '1',
        'grupo_id'     => '5',
        'imagem'       => 'http://www.senado.gov.br/senadores/img/fotos-oficiais/senador4558.jpg',
        'nome'         => 'Gladson de Lima Cameli',
        'naturalidade' => 'Cruzeiro do Sul (AC)',
        'nascimento'   => '1978-03-26',
        'sexo'         => 'Masculino',
        'estado'       =>  'SP',
        'gabinete'     => 'Senado Federal Anexo 2 Ala Teotônio Vilela Gabinete 14',
        'telefone'     => '(61) 3303-1357 / 1367',
        'email'        => 'gladson.cameli@senador.leg.br',
        'site'         => 'http://www.senado.leg.br/senadores/senador/GladsonCameli/Default.asp',
        'escritorio'   => 'AVENIDA TRAVESSA BOA VISTA, 111. ISAURA PARENTE, RIO BRANCO, AC. CEP:69918306',
        'escolaridade' => 'Ensino Superior Completo',
        'status'       => 'Deputado Estadual'              
      ]);
    
      
      Eleito::create([
        'partido_id'   => '1',
        'grupo_id'     => '6',
        'imagem'       => 'http://www.senado.gov.br/senadores/img/fotos-oficiais/senador4558.jpg',
        'nome'         => 'Gladson de Lima Cameli',
        'naturalidade' => 'Cruzeiro do Sul (AC)',
        'nascimento'   => '1978-03-26',
        'sexo'         => 'Masculino',
        'estado'       =>  'SP',
        'gabinete'     => 'Senado Federal Anexo 2 Ala Teotônio Vilela Gabinete 14',
        'telefone'     => '(61) 3303-1357 / 1367',
        'email'        => 'gladson.cameli@senador.leg.br',
        'site'         => 'http://www.senado.leg.br/senadores/senador/GladsonCameli/Default.asp',
        'escritorio'   => 'AVENIDA TRAVESSA BOA VISTA, 111. ISAURA PARENTE, RIO BRANCO, AC. CEP:69918306',
        'escolaridade' => 'Ensino Superior Completo',
        'status'       => 'Vereador'             
      ]);
    }
}
