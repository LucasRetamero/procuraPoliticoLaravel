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
}
