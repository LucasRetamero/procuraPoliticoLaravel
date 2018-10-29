<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Eleito\Partido;

class PartidoController extends Controller
{
  private $objPartido;

  public function __construct(Partido $objPartido)
  {
  $this->objPartido=$objPartido;
  }
  
  public function Index(){
  return view('admin.partidos.index',['eleito'=>$this->objPartido->BuscarPartidos()]);   
  }
  public function IndexFormCadastrar(){
  return view('admin.partidos.create');    
  }
  public function IndexFormAtualizar($id){
  $verifica = $this->objPartido::where('id',$id)
                               ->get();
  if($verifica && $verifica->count() > 0)
  return view('admin.partidos.edit',['partido'=>$verifica]); 
  else 
  return $this->Index();   
  }

  public function FiltrarLista(Request $request){
  $nome = $request['partido'];
  $verifica = $this->objPartido::where('nome','LIKE',"$nome%")    
                                ->get();
  if($verifica && $verifica->count() > 0)
  return view('admin.partidos.index',['eleito'=>$verifica]);
  else
  return $this->Index();
  }
  public function store(Request $request){
  $this->validate($request,[
  'nome'=>'required'    
  ]);    
  $dado = $request->only('nome');
  $verifica=$this->objPartido->create($dado);
  if($verifica)
  return $this->Index();
  }
  public function edit(Request $request){
  $this->validate($request,[
  'nome'=>'required'
  ]);
  $nome = $request->only('nome');
  $verifica = $this->objPartido::where('id',$request['id'])
                     ->update($nome);   
  if($verifica)
  return $this->Index();
  }
  public function destroyer($id){
  $verifica = $this->objPartido::where('id',$id)
                               ->delete();
  if($verifica)
  return $this->Index();    
  }
}
