<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Eleito_Mandato extends Model
{
    public $table      = "eleito_mandatos";
    public $timestamps = false;
    protected $fillable = ['eleito_id','partido','mandato','inicio','fim'];
    protected $guarded = ['admin'];
   
    public function ColetarDados($id){
        return Eleito_Mandato::where('eleito_id',$id)
                                ->get();    
    }

    public function PreCadastroMandato($id){
        return Eleito_Mandato::create([
             'eleito_id' => $id
        ]);    
    }

    public function CadastrarMandato($dado){
      return Eleito_Mandato::create($dado);
    }

    public function ColetarUnico($id){
      return Eleito_Mandato::where('id',$id)
                            ->get();  
    }

    public function EditarMandato($id,$dados){
      return Eleito_Mandato::where('id',$id)
                            ->update($dados);  
    }

    public function DeletarUnico($idMandato){
      return Eleito_Mandato::where('id',$idMandato)
                            ->delete();
    }

    public function Remover($id){
      return Eleito_Mandato::where('eleito_id',$id)
                  ->delete();    
      }
}
