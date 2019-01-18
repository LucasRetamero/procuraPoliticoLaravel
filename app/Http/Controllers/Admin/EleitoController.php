<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Eleito\Eleito;
use App\Model\Eleito\Partido;
use App\Model\Eleito\Grupo;
use App\Model\Eleito\Estado;
use App\Model\Eleito\Eleito_Biografia;
use App\Model\Eleito\Eleito_Academico;
use App\Model\Eleito\Eleito_Profissao;
use App\Model\Eleito\Eleito_Projeto;
use App\Model\Eleito\Eleito_Processo;
use App\Model\Eleito\Eleito_Mandato;


class EleitoController extends Controller
{   
    /** 
     * Descrição da pagina de cadastro
     * - Segundo.blade  = Formulario de  Biografia
     * - Terceiro.blade = Formulario de  Academico
     * - Quarto.blade   = Formulario de  Profissao
     * - Quinto.blade   = Formulario de  Projetos
     * - Sexto.blade    = Formulario de  Processos
     * - Setimo.blade   = Formulario de  Partido/Mandato
    */ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $objEleito,$objPartido,$objGrupo,$objEstado;
    private $objEleitoBiografia,$objEleitoAcademico,$objEleitoProfissao,$objEleitoProjeto,$objEleitoProcesso,$objEleitoMandato;

    public function __construct(Eleito $objEleito,Partido $objPartido,Grupo $objGrupo,Estado $objEstado,Eleito_Biografia $objEleitoBiografia,Eleito_Academico $objEleitoAcademico,Eleito_Profissao $objEleitoProfissao,Eleito_Projeto $objEleitoProjeto,Eleito_Processo $objEleitoProcesso,Eleito_Mandato $objEleitoMandato){
    $this->objEleito          = $objEleito;
    $this->objPartido         = $objPartido; 
    $this->objGrupo           = $objGrupo; 
    $this->objEstado          = $objEstado;  
    $this->objEleitoBiografia = $objEleitoBiografia;
    $this->objEleitoAcademico = $objEleitoAcademico;
    $this->objEleitoProfissao = $objEleitoProfissao;
    $this->objEleitoProjeto   = $objEleitoProjeto;
    $this->objEleitoProcesso  = $objEleitoProcesso;
    $this->objEleitoMandato   = $objEleitoMandato;
    }

    public function Index()
    {
    $eleito = $this->objEleito->BuscarTodos();
    $dadoGrupo = $this->objGrupo->BuscarTodosGrupo();
    return view('admin.eleitos.index',compact('eleito','dadoGrupo'));
    }

   
    /*
     *---Cadastrado dos dados ---- 
    */
     
    public function IndexFormCadastro()
    {
    return view('admin.eleitos.create',['dadoPartidos' =>$this->objPartido->BuscarPartidos(),
                                        'dadoGrupos'   =>$this->objGrupo->BuscarTodosGrupo(),
                                        'dadoEstados'  =>$this->objEstado->BuscarEstados(),
                                        'verifica'     =>"0"]);
    }
   
    public function IndexCadastroBiografia(){
    return view('admin.eleitos.cadastroPassos.segundo',['id'=>$this->objEleito->BuscarUltimoEleito()]);	          
    }

    public function IndexCadastroAcademico(){
    return view('admin.eleitos.cadastroPassos.terceiro',['id'=>$this->objEleito->BuscarUltimoEleito()]);	          
    }
    
    public function IndexCadastroProfissao(){
    return view('admin.eleitos.cadastroPassos.quarto',['id'=>$this->objEleito->BuscarUltimoEleito()]);    
    }
    
    public function IndexCadastroProjeto(){
    return view('admin.eleitos.cadastroPassos.quinto',['id'=>$this->objEleito->BuscarUltimoEleito()]);
    }
    
    public function IndexCadastroProcesso(){
    return view('admin.eleitos.cadastroPassos.sexto',['id'=>$this->objEleito->BuscarUltimoEleito()]);
    }

    public function IndexCadastroMandato(){
    return view('admin.eleitos.cadastroPassos.setimo',['id'=>$this->objEleito->BuscarUltimoEleito()]);
    }

    /*
     *---Edição dos dados ---- 
    */
    public function IndexFormAtualiza($id)
    {
    if(count($this->objEleito->BuscarUnicoEleito($id)) > 0){
    return view('admin.eleitos.edit',['dadoPartidos'=>$this->objPartido->BuscarPartidos(),
                                      'dadoGrupos'  =>$this->objGrupo->BuscarTodosGrupo(),
                                      'dadoEstados' =>$this->objEstado->BuscarEstados(),
                                      'eleito'      =>$this->objEleito->BuscarUnicoEleito($id)]);
     }else{
     return $this->Index();
      }
    }
  
    public function IndexEditarBiografia($id){ 
    if(count($this->objEleitoBiografia->ColetarDados($id)) > 0){
    return view('admin.eleitos.editarPassos.segundo',['dados'=>$this->objEleitoBiografia->ColetarDados($id)]);
    }else{
    return $this->Index();
     }
    }

   public function IndexEditarAcademico($id){
   if(count($this->objEleitoAcademico->ColetarUnico($id)) > 0){
   return view('admin.eleitos.editarPassos.terceiro',['dados'=>$this->objEleitoAcademico->ColetarUnico($id)]);
   }else{
   return $this->Index();
   }
   }

   public function IndexEditarProfissao($id){
   	if(count($this->objEleitoProfissao->ColetarUnico($id)) > 0){
   return view('admin.eleitos.editarPassos.quarto',['dados'=>$this->objEleitoProfissao->ColetarUnico($id)]);
   }else{
   return $this->Index();
   }
   }

   public function IndexEditarProjeto($id){
    if(count($this->objEleitoProjeto->ColetarUnico($id)) > 0){
   return view('admin.eleitos.editarPassos.quinto',['dados'=>$this->objEleitoProjeto->ColetarUnico($id)]);
   }else{
   return $this->Index();
   }
   }

   public function IndexEditarProcesso($id){
   if(count($this->objEleitoProcesso->ColetarUnico($id)) > 0){
   return view('admin.eleitos.editarPassos.sexto',['dados'=>$this->objEleitoProcesso->ColetarUnico($id)]);
   }else{
   return $this->Index();
   }
   }

   public function IndexEditarMandato($id){
    if(count($this->objEleitoMandato->ColetarUnico($id)) > 0){
      return view('admin.eleitos.editarPassos.setimo',['dados'=>$this->objEleitoMandato->ColetarUnico($id)]);
      }else{
      return $this->Index();
      }
   }

   /*
   * Form do cadastro dos dados caso não haja 
   */

   public function IndexCadastrarBiografiaForm($id){	
   if(count($this->objEleitoBiografia->ColetarDados($id)) > 0 || count($this->objEleito->BuscarUnicoEleito($id)) <= 0){
    return $this->Index();
   }else{
   return view('admin.eleitos.editarPassos.cadastrarForm.segundo',['id'=>$id]);
   }
   }

   public function IndexCadastrarAcademicoForm($id){
   if(count($this->objEleito->BuscarUnicoEleito($id)) <= 0){
    return $this->Index();
   }else{
   return view('admin.eleitos.editarPassos.cadastrarForm.terceiro',['id'=>$id]);
   }
   }

   public function IndexCadastrarProfissaoForm($id){
   if(count($this->objEleito->BuscarUnicoEleito($id)) <= 0){
    return $this->Index();
   }else{
   return view('admin.eleitos.editarPassos.cadastrarForm.quarto',['id'=>$id]);
   }
   }

   public function IndexCadastrarProjetoForm($id){
   if(count($this->objEleito->BuscarUnicoEleito($id)) <= 0){
    return $this->Index();
   }else{
    return view('admin.eleitos.editarPassos.cadastrarForm.quinto',['id'=>$id]);
   } 
   }

   public function IndexCadastrarProcessoForm($id){
    if(count($this->objEleito->BuscarUnicoEleito($id)) <= 0){
    return $this->Index();
   }else{
    return view('admin.eleitos.editarPassos.cadastrarForm.sexto',['id'=>$id]);
   } 
   }

   public function IndexCadastrarMandatoForm($id){
    if(count($this->objEleito->BuscarUnicoEleito($id)) <= 0){
      return $this->Index();
     }else{
      return view('admin.eleitos.editarPassos.cadastrarForm.setimo',['id'=>$id]);
     }  
   }
    
   /*
   * Cadastrar dados caso não haja
   */

   public function storeIfNotExistBiografia(Request $request){
    $this->validate($request,[
    'biografia' => 'required'
    ]);
    $dado = $this->objEleitoBiografia->CadastrarBiografia($request['eleito_id'],$request['biografia']);
    return $this->showEleito($request['eleito_id']);
    }

    public function storeIfNotExistAcademico(Request $request){
    if($request['grau'] == "0") $request['grau'] = "";
    $this->validate($request,[
    'curso'           => 'required',
    'grau'            => 'required',
    'estabelecimento' => 'required',
    'local'           => 'required'
    ]);
    $dado = $request->except(['btnAcao','_token']);
    $add  = $this->objEleitoAcademico->CadastrarAcademico($dado);
    return $this->showEleito($request['eleito_id']);
    }
   
    public function storeIfNotExistProfissao(Request $request){
      $this->validate($request,[
      'nome' => 'required'
      ]);  
      $dado = $request->except(['btnAcao','_token']);
      $add = $this->objEleitoProfissao->CadastrarProfissao($dado);
      return $this->showEleito($request['eleito_id']);
    }

    public function storeIfNotExistProjeto(Request $request){
     $this->validate($request,[
     'materia' => 'required',
     'ementa'  => 'required',
     'autor'   => 'required',
     'data'    => 'required'
     ]);
     $dado = $request->except(['btnAcao','_token']);
     $add  = $this->objEleitoProjeto->CadastrarProjeto($dado);
     return $this->showEleito($request['eleito_id']);
    }

    public function storeIfNotExistProcesso(Request $request){
     $this->validate($request,[
     'processo'  => 'required',
     'descricao' => 'required'
     ]);
     $dado = $request->except(['btnAcao','_token']);
     $add  = $this->objEleitoProcesso->CadastrarProcesso($dado);
     return $this->showEleito($request['eleito_id']);
    }

    public function storeIfNotExistMandato(Request $request){
        $this->validate($request,[
        'partido'  => 'required',
        'mandato' => 'required',
        'inicio' => 'required'
        ]);
        $dado = $request->except(['btnAcao','_token']);
        $add  = $this->objEleitoMandato->CadastrarMandato($dado);
        return $this->showEleito($request['eleito_id']); 
    }

    public function teste(){
    return view('admin.eleitos.cadastroPassos.segundo',['id'=>$this->objEleito->BuscarUltimoEleito()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        if($request['verifica'] == "0"){
        if($request['partido_id'] == "0"){
        $request['partido_id'] = "";
        }
        if($request['grupo_id'] == "0"){
        $request['grupo_id'] = "";    
        }
        if($request['sexo'] == "0"){
        $request['sexo'] = "";    
        }
        if($request['estado'] == "0"){
        $request['estado'] = "";    
        }
        if($request['status'] == "0"){
        $request['status'] = "";    
        }

        $this->validate($request,[
         'partido_id'   => 'required',
         'grupo_id'     => 'required',
         'imagem'       => 'required',
         'nome'         => 'required',
         'naturalidade' => 'required',
         'nascimento'   => 'required',
         'sexo'         => 'required',
         'estado'       => 'required',
         'gabinete'     => 'required',
         'telefone'     => 'required',
         'email'        => 'required',
         'site'         => 'required',
         'escritorio'   => 'required',
         'escolaridade' => 'required',
         'status'       => 'required'
        ]);
        $cadadastrarInfo = $this->objEleito::create($request->all());
        if($cadadastrarInfo)
        return view('admin.eleitos.cadastroPassos.segundo',['id'=>$this->objEleito->BuscarUltimoEleito()]);
        }
    }

    public function storeBiografia(Request $request){
    $this->validate($request,[
    'biografia' => 'required'
    ]);
    $dado = $this->objEleitoBiografia->CadastrarBiografia($request['eleito_id'],$request['biografia']);
    return view('admin.eleitos.cadastroPassos.terceiro',['id'=>$this->objEleito->BuscarUltimoEleito()]);
    }

    public function storeAcademico(Request $request){
    if($request['btnAcao'] == "add"){
    if($request['grau'] == "0") $request['grau'] = "";
    $this->validate($request,[
    'curso'           => 'required',
    'grau'            => 'required',
    'estabelecimento' => 'required',
    'local'           => 'required'
    ]);
    $dado = $request->except(['btnAcao','_token']);
    $add  = $this->objEleitoAcademico->CadastrarAcademico($dado);
    return view('admin.eleitos.cadastroPassos.terceiro',['id'=>$this->objEleito->BuscarUltimoEleito()]);
      }else{
    return view('admin.eleitos.cadastroPassos.quarto',['id'=>$this->objEleito->BuscarUltimoEleito()]);    
      }
    }

    public function storeProfissao(Request $request){
     if($request['btnAcao'] == "add"){
      $this->validate($request,[
      'nome' => 'required'
      ]);  
      $dado = $request->except(['btnAcao','_token']);
      $add = $this->objEleitoProfissao->CadastrarProfissao($dado);
      return view('admin.eleitos.cadastroPassos.quarto',['id'=>$this->objEleito->BuscarUltimoEleito()]);
      }else{
      return view('admin.eleitos.cadastroPassos.quinto',['id'=>$this->objEleito->BuscarUltimoEleito()]);    
      }
    }
 
    public function storeProjeto(Request $request){
     if($request['btnAcao'] == "add"){
     $this->validate($request,[
     'materia' => 'required',
     'ementa'  => 'required',
     'autor'   => 'required',
     'data'    => 'required'
     ]);
     $dado = $request->except(['btnAcao','_token']);
     $add  = $this->objEleitoProjeto->CadastrarProjeto($dado);
     return view('admin.eleitos.cadastroPassos.quinto',['id'=>$this->objEleito->BuscarUltimoEleito()]);
     }else{
     return view('admin.eleitos.cadastroPassos.sexto',['id'=>$this->objEleito->BuscarUltimoEleito()]);      
     }
    }

    public function storeProcesso(Request $request){
     if($request['btnAcao'] == "add"){
     $this->validate($request,[
     'processo'  => 'required',
     'descricao' => 'required'
     ]);
     $dado = $request->except(['btnAcao','_token']);
     $add  = $this->objEleitoProcesso->CadastrarProcesso($dado);
     return view('admin.eleitos.cadastroPassos.sexto',['id'=>$this->objEleito->BuscarUltimoEleito()]);
     }else{
     return view('admin.eleitos.cadastroPassos.setimo',['id'=>$this->objEleito->BuscarUltimoEleito()]);
     }
    }

    public function storeMandato(Request $request){
        if($request['btnAcao'] == "add"){
        $this->validate($request,[
        'partido'  => 'required',
        'mandato' => 'required',
        'inicio' => 'required'
        ]);
        $dado = $request->except(['btnAcao','_token']);
        $add  = $this->objEleitoMandato->CadastrarMandato($dado);
        return view('admin.eleitos.cadastroPassos.setimo',['id'=>$this->objEleito->BuscarUltimoEleito()]);
        }else{
        return $this->Index();
        }
       }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    $dadoGrupo = $this->objGrupo->BuscarTodosGrupo();
    $eleito =  $this->objEleito::where('grupo_id',$request['grupo_id'])
                                 ->get();
    if($eleito && $eleito->count() > 0){
    $verificaId = $request['grupo_id'];
    return view('admin.eleitos.index',compact('eleito','dadoGrupo','verificaId'));
    }else{
    $eleito = $this->objEleito->BuscarTodos();
    $dadoGrupo = $this->objGrupo->BuscarTodosGrupo();
    return view('admin.eleitos.index',compact('eleito','dadoGrupo'));
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
            if($request['partido_id'] == "0"){
            $request['partido_id'] = "";
            }
            if($request['grupo_id'] == "0"){
            $request['grupo_id'] = "";    
            }
            if($request['sexo'] == "0"){
            $request['sexo'] = "";    
            }
            if($request['estado'] == "0"){
            $request['estado'] = "";    
            }
            if($request['status'] == "0"){
            $request['status'] = "";    
            }
    
            $this->validate($request,[
             'partido_id'   => 'required',
             'grupo_id'     => 'required',
             'imagem'       => 'required',
             'nome'         => 'required',
             'naturalidade' => 'required',
             'nascimento'   => 'required',
             'sexo'         => 'required',
             'estado'       => 'required',
             'gabinete'     => 'required',
             'telefone'     => 'required',
             'email'        => 'required',
             'site'         => 'required',
             'escritorio'   => 'required',
             'escolaridade' => 'required',
             'status'       => 'required'
            ]);
           $dados = $request->except(['_token','id','btnAcao']); 
           $verifica = $this->objEleito->EditarEleitor($request['id'],$dados);
           return $this->showEleito($request['id']);  
    }
 
    public function editBiografia(Request $request){
    $this->validate($request,[
       'biografia' => 'required'
       ]);
    $dados = $request->except(['_token','btnAcao']);
    $editar = $this->objEleitoBiografia->EditarCadastroBiografia($request['eleito_id'],$dados);
    return $this->showEleito($request['eleito_id']);
    }

    public function editAcademico(Request $request){
    $this->validate($request,[
    'curso'           => 'required',
    'grau'            => 'required',
    'estabelecimento' => 'required',
    'local'           => 'required'
    ]);
    $dados = $request->except(['_token','btnAcao','eleito_id']);
    $editar = $this->objEleitoAcademico->EditarCadastroAcademico($request['id'],$dados);
    return $this->showEleito($request['eleito_id']);
    }

    public function editProfissao(Request $request){
    $this->validate($request,[
    'nome' => 'required'
    ]);	
    $dados = $request->except(['_token','btnAcao','eleito_id']);
    $editar = $this->objEleitoProfissao->EditarProfissao($request['id'],$dados);
    return $this->showEleito($request['eleito_id']);
    }

    public function editProjeto(Request $request){
     $this->validate($request,[
     'materia' => 'required',
     'ementa'  => 'required',
     'autor'   => 'required',
     'data'    => 'required'
     ]);
     $dados = $request->except(['_token','btnAcao','eleito_id']);
     $editar = $this->objEleitoProjeto->EditarProjeto($request['id'],$dados);
     return $this->showEleito($request['eleito_id']);
    }

    public function editProcesso(Request $request){
     $this->validate($request,[
     'processo'  => 'required',
     'descricao' => 'required'
     ]);
     $dados = $request->except(['_token','btnAcao','eleito_id']);  
     $editar = $this->objEleitoProcesso->EditarProcesso($request['id'],$dados);
     return $this->showEleito($request['eleito_id']); 
    }

    public function editMandato(Request $request){
      $this->validate($request,[
        'partido'  => 'required',
        'mandato' => 'required',
        'inicio' => 'required'
        ]);
        $dados = $request->except(['_token','btnAcao','eleito_id']);  
        $editar = $this->objEleitoMandato->EditarMandato($request['id'],$dados);
        return $this->showEleito($request['eleito_id']); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showEleito($id)
    {
       
        /*$eleito = DB::table('eleitos')
                         ->join('eleito_biografias','eleito_biografias.eleito_id','=','eleitos.id')
                         ->join('eleito_academicos','eleito_academicos.eleito_id','=','eleitos.id')
                         ->join('eleito_profissaos','eleito_profissaos.eleito_id','=','eleitos.id')
                         ->join('eleito_projetos','eleito_projetos.eleito_id','=','eleitos.id')
                         ->join('eleito_processos','eleito_processos.eleito_id','=','eleitos.id')
                         ->join('eleito_mandatos','eleito_mandatos.eleito_id','=','eleitos.id')
                         ->select('eleitos.*','eleito_biografias.biografia','eleito_academicos.*','eleito_profissaos.nome','eleito_projetos.*','eleito_processos.*','eleito_mandatos.*')
                         ->where('eleitos.id','=',$id)
                         ->get();ColetarDados($id)*/
        $eleito = $this->objEleito::where('id',$id)
                                   ->get();
        $buscarPartido   = $this->objPartido->BuscarUnico($id);
        $buscarBiografia = $this->objEleitoBiografia->ColetarDados($id);
        $buscarAcademico = $this->objEleitoAcademico->ColetarDados($id);
        $buscarProfissao = $this->objEleitoProfissao->ColetarDados($id);
        $buscarProjeto   = $this->objEleitoProjeto->ColetarDados($id);
        $buscarProcesso  = $this->objEleitoProcesso->ColetarDados($id);
        $buscarMandato   = $this->objEleitoMandato->ColetarDados($id);
        if(count($eleito) > 0)  
        return view('admin.eleitos.show',compact('eleito','buscarPartido','buscarBiografia',
                                                 'buscarAcademico','buscarProfissao','buscarProjeto',
                                                 'buscarProcesso','buscarMandato'));
        else
        return redirect()->route('admin.eleitos.lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Destroy($id)
    {
     $rmEleitoBiografia = $this->objEleitoBiografia->Remover($id);    //segundo
     $rmEleitoAcademico = $this->objEleitoAcademico->Remover($id);   //terceiro
     $rmEleitoProfissao = $this->objEleitoProfissao->Remover($id);  //quarto
     $rmEleitProjeto    = $this->objEleitoProjeto->Remover($id);   //quinto
     $rmEleitoProcesso  = $this->objEleitoProcesso->Remover($id); //sexto
     $rmEleitoMandato   = $this->objEleitoMandato->Remover($id); //setimo
     $rmEleito          = $this->objEleito->Remover($id);       //principal
     return $this->Index();
    }

    public function destroyEleitoAcademico($id,$idAcademico){
     $remove = $this->objEleitoAcademico->DeletarUnico($idAcademico);	
     return $this->showEleito($id);
    }

    public function destroyEleitoProfissao($id,$idProfissao){
     $remove = $this->objEleitoProfissao->DeletarUnico($idProfissao);
     return $this->showEleito($id);	
    }

    public function destroyEleitoProjeto($id,$idProjeto){
      $remove = $this->objEleitoProjeto->DeletarUnico($idProjeto);  
      return $this->showEleito($id);
    }

    public function destroyEleitoProcesso($id,$idProcesso){
      $remove = $this->objEleitoProcesso->DeletarUnico($idProcesso);  
      return $this->showEleito($id);  
    }

    public function destroyEleitoMandato($id,$idMandato){
      $remove = $this->objEleitoMandato->DeletarUnico($idMandato);  
      return $this->showEleito($id);  
    }
}
