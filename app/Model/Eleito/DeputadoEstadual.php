<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;
use App\Model\Eleito\Eleito;

class DeputadoEstadual extends Model
{
    private $objDeputadoEstadual;

    public function __construct(Eleito $obj){
    $this->objDeputadoEstadual = $obj;   
    }

    public function BuscarLista(){
     return $this->objDeputadoEstadual::all() 
                                      ->where('grupo_id',5);   
    }

    public function BuscarUm($id){
    return $this->objDeputadoEstadual::where('id',$id)
                                 ->where('grupo_id',5)
                                 ->get();    
    }
    public function BuscarQuantidadeDeputadoEstadual(){
    return $this->objDeputadoEstadual::where('grupo_id',5)
                                 ->count();
    }
}
