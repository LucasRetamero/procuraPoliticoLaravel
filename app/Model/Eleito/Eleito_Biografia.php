<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Eleito_Biografia extends Model
{
    public $timestamps = false;
    public $table = "eleito_biografias";
    protected $fillable = ['eleito_id','biografia'];
    protected $guarded = ['admin'];

    public function ColetarDados($id){
    return Eleito_Biografia::where('eleito_id',$id)
                            ->get();    
    }

    public function CadastrarBiografia($id,$biografia){                         
    return Eleito_Biografia::create([
      'biografia' => $biografia,
      'eleito_id' => $id  
    ]);                    
    }

    public function EditarCadastroBiografia($id,$biografia){
    return Eleito_Biografia::where('eleito_id',$id)
                            ->update([
                              'biografia' => $biografia['biografia']
                               ]);        
    }

    public function VerificaCadastrado($id){
    return Eleito_Biografia::where('eleito_id',$id)
                            ->count();    
    }

    public function Remover($id){
      return Eleito_Biografia::where('eleito_id',$id)
                  ->delete();    
      }
}
