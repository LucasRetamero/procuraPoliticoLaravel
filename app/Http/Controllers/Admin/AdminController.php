<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Eleito\Eleito;
use App\Model\Eleito\Presidente;
use App\Model\Eleito\DeputadoFederal;
use App\Model\Eleito\Senador;
use App\Model\Eleito\Governador;
use App\Model\Eleito\DeputadoEstadual;
use App\Model\Eleito\Vereador;
use App\Model\Eleito\Partido;
use App\Model\Eleito\Grupo;
use App\User;
use App\Model\Home\Contato;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    private $objEleito,$objPresidente,$objDeputadoFederal,$objSenador,$objGovernador,$objDeputadoEstadual,$objVereador,$objUsuario,$objContato;

    public function __construct(Eleito $objEleito,Presidente $objPresidente,DeputadoFederal $objDeputadoFederal,Senador $objSenador,Governador $objGovernador,DeputadoEstadual $objDeputadoEstadual,Vereador $objVereador,Partido $objPartido,Grupo $objGrupo,User $objUsuario,Contato$objContato){
    $this->objEleito           = $objEleito;
    $this->objPresidente       = $objPresidente;
    $this->objDeputadoFederal  = $objDeputadoFederal;
    $this->objSenador          = $objSenador;
    $this->objGovernador       = $objGovernador;
    $this->objDeputadoEstadual = $objDeputadoEstadual;
    $this->objVereador         = $objVereador;
    $this->objPartido          = $objPartido;
    $this->objGrupo            = $objGrupo;
    $this->objUsuario          = $objUsuario;
    $this->objContato          = $objContato;
     }
    public function index()
    {    
        return view('admin.dashboard',['dadoEleito'=>$this->objEleito->BuscarQuantidadeEleitos(),
                                       'dadoPresidente'=>$this->objPresidente->BuscarQuantidadePresidente(),
                                       'dadoDeputadoFederal'=>$this->objDeputadoFederal->BuscarQuantidadeDeputadoFederal(),
                                       'dadoSenador'=>$this->objSenador->BuscarQuantidadeSenador(),
                                       'dadoGovernador'=>$this->objGovernador->BuscarQuantidadeGovernador(),
                                       'dadoDeputadoEstadual'=>$this->objDeputadoEstadual->BuscarQuantidadeDeputadoEstadual(),
                                       'dadoVereador'=>$this->objVereador->BuscarQuantidadeVereador(),
                                       'dadoPartido'=>$this->objPartido->BuscarQuantidadePartido(),
                                       'dadoGrupo'=>$this->objGrupo->BuscarQuantidadeGrupo(),
                                       'dadoUsuario'=>$this->objUsuario->BuscarQuantidadeUsuario(),
                                       'dadoContato'=>$this->objContato->BuscarQuantidadeContato()]);
    }
}
