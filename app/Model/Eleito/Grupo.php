<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['nome'];
    protected $guarded =  ['admin'];

    public function BuscarQuantidadeGrupo(){
    return Grupo::all()
                  ->count();    
    }
    public function BuscarTodosGrupo(){
    return Grupo::all();    
    }
    public function BuscarUnico($id){
    return Grupo::where('id',$id)
                  ->get();    
    }
}
