<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Contato;

class ContatoController extends Controller
{
    private $contato;

    public function __construct(Contato $contatos){
    $this->contato = $contatos;
    }

    public function EnviarContato(Request $request){
    if($request['assunto'] == "Escolher"){
    $request['assunto'] = "";
    }
    $this->validate($request,$this->contato->rules); 
    $enviar = $this->contato::create([
       'nome'      => $request['nome'],
       'email'     => $request['email'],
       'assunto'   => $request['assunto'],
       'menssagem' => $request['menssagem']
    ]);
    if($enviar)
    return redirect()->route('home');
    }
    
}
