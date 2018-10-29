<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;
use App\Model\Eleito\Eleito;

class Senador extends Model
{
    private $objSenador;

    public function __construct(Eleito $obj){
     $this->objSenador = $obj;   
    }

    public function BuscarLista(){
    return $this->objSenador::all()
                              ->where('grupo_id',3);    
    }

    public function BuscarUm($id){
    return $this->objSenador::where('id',$id)
                              ->where('grupo_id',3)
                              ->get();    
    }
    public function BuscarQuantidadeSenador(){
    return $this->objSenador::where('grupo_id',3)
                              ->count();    
    }
}
