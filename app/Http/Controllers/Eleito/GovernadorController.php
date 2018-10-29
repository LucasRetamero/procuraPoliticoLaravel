<?php

namespace App\Http\Controllers\Eleito;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Eleito\Governador;
use App\Model\Eleito\Estado;
use App\Model\Eleito\Partido;
use App\Model\Eleito\Eleito;
use App\Model\Eleito\Eleito_Biografia;
use App\Model\Eleito\Eleito_Academico;
use App\Model\Eleito\Eleito_Profissao;
use App\Model\Eleito\Eleito_Projeto;
use App\Model\Eleito\Eleito_Processo;
use App\Model\Eleito\Eleito_Mandato;

class GovernadorController extends Controller
{
    private $objGovernador;
    private $objEstado;
    private $objPartido;
    private $objEleito;
    private $objEleitoBiografia,$objEleitoAcademico,$objEleitoProfissao,$objEleitoProjeto,$objEleitoProcesso,$objEleitoMandato;

    public function __construct(Governador $obj, Estado $objEsta, Partido $objPar, Eleito $objEle,Eleito_Biografia $objEleitoBiografia,Eleito_Academico $objEleitoAcademico,Eleito_Profissao $objEleitoProfissao,Eleito_Projeto $objEleitoProjeto,Eleito_Processo $objEleitoProcesso,Eleito_Mandato $objEleitoMandato){
    $this->objGovernador = $obj;  
    $this->objEstado = $objEsta;
    $this->objPartido = $objPar;
    $this->objEleito = $objEle;
    $this->objEleitoBiografia  = $objEleitoBiografia;  
    $this->objEleitoAcademico  = $objEleitoAcademico;
    $this->objEleitoProfissao  = $objEleitoProfissao;
    $this->objEleitoProjeto    = $objEleitoProjeto;  
    $this->objEleitoProcesso   = $objEleitoProcesso;
    $this->objEleitoMandato   =  $objEleitoMandato;   
    }
    public function Index(){
        $ativo=0;
        $nomeMenu = "Lista de Governadores";
        $listaDados=$this->objGovernador->BuscarLista();
        $listaEstado = $this->objEstado->BuscarEstados();
        $listaPartido = $this->objPartido->BuscarPartidos();
        return view('eleito.governador.lista.index',compact('ativo','nomeMenu','listaDados','listaEstado', 'listaPartido'));
        }
        
    public function ExibirConteudo($id){
        $ativo=0;
        $nomeMenu="Informações";
        $buscarInfo = $this->objGovernador->BuscarUm($id);
        $buscarBiografia = $this->objEleitoBiografia->ColetarDados($id); 
        $buscarAcademico = $this->objEleitoAcademico->ColetarDados($id);
        $buscarProfissao = $this->objEleitoProfissao->ColetarDados($id);
        $buscarProjeto   = $this->objEleitoProjeto->ColetarDados($id); 
        $buscarProcesso  = $this->objEleitoProcesso->ColetarDados($id);
        $buscarMandato   = $this->objEleitoMandato->ColetarDados($id);
        //dd($buscarInfo);
        if(count($buscarInfo) > 0)
        return view('eleito.governador.conteudo.index',compact('ativo','nomeMenu','buscarInfo',
                                                               'buscarBiografia','buscarAcademico',
                                                               'buscarProfissao','buscarProjeto','buscarProcesso','buscarMandato'));    
        else
        return redirect()->route('home');
        }
        public function ListaFiltrada(Request $request){
            $lista = $request->all();
            if ($lista['nome'] != ""){
            $listaDados = $this->objEleito->BuscarNome($request['nome'], 4);
            return $this->VerificacaoQuery($listaDados);   
            }else if($lista['partido'] != "0" && $lista['estado'] == "0" && $lista['sexo'] == "0"){
            $listaDados = $this->objEleito->BuscarPartido($request['partido'], 4);
            return $this->VerificacaoQuery($listaDados);    
            }else if($lista['partido'] == "0" && $lista['estado'] != "0" && $lista['sexo'] == "0"){
            $listaDados = $this->objEleito->BuscarEstado($request['estado'], 4);
            return $this->VerificacaoQuery($listaDados);    
            }else if($lista['partido'] == "0" && $lista['estado'] == "0" && $lista['sexo'] != "0"){
            $listaDados = $this->objEleito->BuscarSexo($request['sexo'], 4);
            return $this->VerificacaoQuery($listaDados);    
            }else if($lista['partido'] != "0" && $lista['estado'] != "0" && $lista['sexo'] != "0"){
            $listaDados = $this->objEleito->BuscarPartEstSex($request['partido'],$request['estado'],$request['sexo'], 4);
            return $this->VerificacaoQuery($listaDados);    
            }else if($lista['partido'] != "0" && $lista['estado'] != "0" && $lista['sexo'] == "0"){
            $listaDados = $this->objEleito->BuscarPartidoEstado($request['partido'],$request['estado'], 4);
            return $this->VerificacaoQuery($listaDados);    
            }else if($lista['partido'] != "0" && $lista['estado'] == "0" && $lista['sexo'] != "0"){
            $listaDados = $this->objEleito->BuscarPartidoSexo($request['partido'],$request['sexo'], 4);
            return $this->VerificacaoQuery($listaDados);    
            }else if($lista['partido'] == "0" && $lista['estado'] != "0" && $lista['sexo'] != "0"){
            $listaDados = $this->objEleito->BuscarEstadoSexo($request['estado'],$request['sexo'], 4);
            return $this->VerificacaoQuery($listaDados);    
            }else{
            return $this->Index();    
            }
        }
    
        public function VerificacaoQuery($listaDados){
            if($listaDados && count($listaDados) > 0){
             return $this->PegarViewQuery(true,$listaDados);
            }else{
             $listaDados = $this->objGovernador->BuscarLista();
             return $this->PegarViewQuery(false,$listaDados);
            }  
        }
    
        public function PegarViewQuery($query, $lista){
            $ativo = 0;
            $nomeMenu = "Lista de Governadores";
            $listaEstado = $this->objEstado->BuscarEstados();
            $listaPartido = $this->objPartido->BuscarPartidos();
            if($query){
            $listaDados = $lista;
                return view('eleito.governador.lista.index', compact('ativo', 'nomeMenu', 'listaDados', 'listaEstado', 'listaPartido'));
            }else{
            $listaDados = $lista;
            $pesquisa = "Pesquisa não encontrada!";
                return view('eleito.governador.lista.index', compact('ativo', 'nomeMenu', 'listaDados', 'listaEstado', 'listaPartido', 'pesquisa'));
            }
        }

    
}
