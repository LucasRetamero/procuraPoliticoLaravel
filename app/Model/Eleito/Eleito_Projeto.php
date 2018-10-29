<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Eleito_Projeto extends Model
{
    public $table      = "eleito_projetos";
    public $timestamps = false;
    protected $fillable = ['eleito_id','materia','ementa','autor','data'];
    protected $guarded = ['admin'];

    public function ColetarDados($id){
        return Eleito_Projeto::where('eleito_id',$id)
                                ->get();    
    }
    public function PreCadastroProjeto($id){
        return Eleito_Projeto::create([
             'eleito_id' => $id
        ]);    
    }
    public function CadastrarProjeto($dado){
        return Eleito_Projeto::create($dado);    
    }
}
