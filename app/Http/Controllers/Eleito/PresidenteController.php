<?php

namespace App\Http\Controllers\Eleito;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Eleito\Presidente;
use App\Model\Eleito\Eleito_Biografia;
use App\Model\Eleito\Eleito_Academico;
use App\Model\Eleito\Eleito_Profissao;
use App\Model\Eleito\Eleito_Projeto;
use App\Model\Eleito\Eleito_Processo;
use App\Model\Eleito\Eleito_Mandato;

class PresidenteController extends Controller
{
    private $listaDados,$objPresidente,$objEleitoBiografia,
            $objEleitoAcademico,$objEleitoProfissao,$objEleitoProjeto,$objEleitoProcesso,$objEleitoMandato;
    
    
    public function __construct(Presidente $obj,Eleito_Biografia $objEleitoBiografia,Eleito_Academico $objEleitoAcademico,Eleito_Profissao $objEleitoProfissao,Eleito_Projeto $objEleitoProjeto,Eleito_Processo $objEleitoProcesso,Eleito_Mandato $objEleitoMandato){
    $this->objPresidente       = $obj;
    $this->objEleitoBiografia  = $objEleitoBiografia;  
    $this->objEleitoAcademico  = $objEleitoAcademico;
    $this->objEleitoProfissao  = $objEleitoProfissao;
    $this->objEleitoProjeto    = $objEleitoProjeto;  
    $this->objEleitoProcesso   = $objEleitoProcesso;
    $this->objEleitoMandato   =  $objEleitoMandato;
    }

    public function Index(){
        $ativo = 0;
        $nomeMenu = "Lista de Presidentes";
        $listaDados = $this->objPresidente->BuscarTodosLista();
        return view('eleito.presidente.lista.index',compact('ativo','nomeMenu','listaDados'));    
    }

    public function ExibirConteudo($id){
      $title="Procura Politico - Presidente";
      $ativo=0;
      $nomeMenu = "Informações";
      $buscarInfo = $this->objPresidente->BuscarUm($id);
      $buscarBiografia = $this->objEleitoBiografia->ColetarDados($id); 
      $buscarAcademico = $this->objEleitoAcademico->ColetarDados($id);
      $buscarProfissao = $this->objEleitoProfissao->ColetarDados($id);
      $buscarProjeto   = $this->objEleitoProjeto->ColetarDados($id); 
      $buscarProcesso  = $this->objEleitoProcesso->ColetarDados($id);
      $buscarMandato   = $this->objEleitoMandato->ColetarDados($id);
      //dd($buscarInfo);
      if(count($buscarInfo) > 0)
      return view('eleito.presidente.conteudo.index',compact('title','ativo','nomeMenu',
                                                          'buscarInfo','buscarBiografia','buscarAcademico',
                                                            'buscarProfissao','buscarProjeto','buscarProcesso','buscarMandato')); 
      else
      return redirect()->route('home');                                                       
    }
}
