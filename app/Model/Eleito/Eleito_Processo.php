<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Eleito_Processo extends Model
{
    public $table      = "eleito_processos";
    public $timestamps = false;
    protected $fillable = ['eleito_id','processo','descricao'];
    protected $guarded = ['admin'];

    public function ColetarDados($id){
        return Eleito_Processo::where('eleito_id',$id)
                                ->get();    
    }
    
    public function PreCadastroProcesso($id){
        return Eleito_Processo::create([
             'eleito_id' => $id
        ]);    
    }
    
    public function CadastrarProcesso($dado){
        return Eleito_Processo::create($dado);    
    }

    public function ColetarUnico($id){
        return Eleito_Processo::where('id',$id)
                             ->get();  
    }

    public function EditarProcesso($id,$dados){
        return Eleito_Processo::where('id',$id)
                               ->update($dados); 
     }

     public function DeletarUnico($id){
        return Eleito_Processo::where('id',$id)
                              ->delete();
     } 

     public function Remover($id){
        return Eleito_Processo::where('eleito_id',$id)
                    ->delete();    
        }


}
