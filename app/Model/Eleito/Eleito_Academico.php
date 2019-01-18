<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Eleito_Academico extends Model
{
  public $table      = "eleito_academicos";
  public $timestamps = false;  
  protected $fillable = ['eleito_id','curso','grau','estabelecimento','local'];
  protected $guarded = ['admin'];

   public function ColetarDados($id){
    return Eleito_Academico::where('eleito_id',$id)
                            ->get();    
    }

    public function EditarCadastroAcademico($id,$dados){
    return Eleito_Academico::where('id',$id)
                            ->update($dados);  
    }

    public function CadastrarAcademico($dado){
    return Eleito_Academico::create($dado);  
    }
   
    public function ColetarUnico($id){
    return Eleito_Academico::where('id',$id)
                             ->get();
    }

    public function DeletarUnico($id){
    return Eleito_Academico::where('id',$id)
                            ->delete();	
    }

    public function Remover($id){
      return Eleito_Academico::where('eleito_id',$id)
                  ->delete();    
      }


  
}
