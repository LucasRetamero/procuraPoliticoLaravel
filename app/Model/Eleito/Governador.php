<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;
use App\Model\Eleito\Eleito;

class Governador extends Model
{
    private $objGovernador;

    public function __construct(Eleito $obj){
    $this->objGovernador = $obj;   
    }

    public function BuscarLista(){
     return $this->objGovernador::all()
                                ->where('grupo_id',4);   
    }

    public function BuscarUm($id){
    return $this->objGovernador::where('id',$id)
                                 ->where('grupo_id',4)
                                 ->get();    
    }
    public function BuscarQuantidadeGovernador(){
    return $this->objGovernador::where('grupo_id',4)
                                ->count();    
    }
}
