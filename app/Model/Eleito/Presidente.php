<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;
use App\Model\Eleito\Eleito;

class Presidente extends Model
{   
    protected $objPresidente;

    public function __construct(Eleito $obj){
    $this->objPresidente = $obj;    
    }
    
    public function BuscarTodosLista(){
    return $this->objPresidente::all()
                                 ->where('grupo_id',1);
    }

    public function BuscarUm($id){
    return  $this->objPresidente::where('id',$id)
                                  ->where('grupo_id',1)
                                  ->get();
    }
    public function BuscarQuantidadePresidente(){
    return $this->objPresidente::where('grupo_id',1)
                      ->count();    
    }
}
