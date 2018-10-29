<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Contato;

class ContatoController extends Controller
{  
    private $objContato;

    public function __construct(Contato $objContato){
    $this->objContato = $objContato;
    }
    public function Index(){
    return view('admin.contatos.index',['eleito'=>$this->objContato->BuscarContato()]);    
    }
    public function IndexFiltrada(Request $request){
    $verifica = $this->objContato->FiltrarLista($request['assunto']);
    if($verifica && count($verifica) > 0)
    return view('admin.contatos.index',['eleito'=>$verifica]);
    else
    return $this->Index();
    }
    public function ShowContatos($id){
    $eleito = $this->objContato->show($id);
    return view('admin.contatos.show',compact('eleito'));
    }
    public function Destroyer($id){
    $verifica = $this->objContato->destryoer($id);
    if($verifica)
    return redirect()->route('admin.contato.lista');    
    }
}
