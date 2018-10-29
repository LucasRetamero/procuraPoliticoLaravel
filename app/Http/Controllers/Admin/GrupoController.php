<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Eleito\Grupo;

class GrupoController extends Controller
{ 
    private $objGrupo;

    public function __construct(Grupo $objGrupo)
    {
    $this->objGrupo = $objGrupo;
    }

    public function Index(){
    return view('admin.grupos.index',['eleito'=>$this->objGrupo->BuscarTodosGrupo()]);
    }
    public function IndexFormCadastrar(){
    return view('admin.grupos.create');    
    }
    public function IndexFormAtualizar($id){
    $dado = $this->objGrupo::where('id',$id)
                            ->get();
    return view('admin.grupos.edit',['grupo'=>$dado]);
    }
    public function FiltrarLetra(Request $request){
    $letra = $request['grupo'];
    $verifica = $this->objGrupo::where('nome','LIKE',"$letra%")
                            ->get();
    if($verifica && $verifica->count() > 0)
    return view('admin.grupos.index',['eleito'=>$verifica]);
    else
    return view('admin.grupos.index',['eleito'=>$this->objGrupo->BuscarTodosGrupo()]);                  
    }
    
    public function store(Request $request){
    $this->validate($request,[
    'nome' => 'required'    
    ]);
    $dado = $request->only('nome');
    $verfica = $this->objGrupo::create($dado);
    if($verfica)
    return view('admin.grupos.index',['eleito'=>$this->objGrupo->BuscarTodosGrupo()]);
    }
    public function destroy($id){
    $verifica = $this->objGrupo::where('id',$id)
                                ->delete();
    if($verifica)
    return view('admin.grupos.index',['eleito'=>$this->objGrupo->BuscarTodosGrupo()]);   
    }
    public function edit(Request $request){
    $this->validate($request,[
    'nome' => 'required'   
    ]);
    $verifica = $this->objGrupo::where('id',$request['id'])
                                ->update($request->only('nome'));
    if($verifica)
    return $this->Index();
    }
        
}
