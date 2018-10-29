<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable = ['nome'];
    protected $guarded  = ['admin']; 

    public function BuscarPartidos(){
    return Partido::all();
    }
    public function BuscarQuantidadePartido(){
    return Partido::all()
                    ->count();    
    }
    public function BuscarUnico($id){
    return Partido::where('id',$id)
                   ->get();    
    }
}
