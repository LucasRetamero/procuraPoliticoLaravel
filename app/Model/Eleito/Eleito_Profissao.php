<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Eleito_Profissao extends Model
{
    public $table = "eleito_profissaos";
    public $timestamps = false;
    protected $fillable = ['eleito_id','nome'];
    protected $guarded = ['admin'];

    public function ColetarDados($id){
        return Eleito_Profissao::where('eleito_id',$id)
                                ->get();    
    }

    public function PreCadastroProfissao($id){
        return Eleito_Profissao::create([
             'eleito_id' => $id
        ]);    
    }

    public function  CadastrarProfissao($dado){
       return Eleito_Profissao::create($dado);
    }

    public function ColetarUnico($id){
     return Eleito_Profissao::where('id',$id)
                              ->get(); 	
    }

    public function EditarProfissao($id,$dados){
     return Eleito_Profissao::where('id',$id)
                             ->update($dados);	
    }

    public function DeletarUnico($id){
     return Eleito_Profissao::where('id',$id)
                             ->delete();	
    }

    public function Remover($id){
        return Eleito_Profissao::where('eleito_id',$id)
                    ->delete();    
        }
        
}
