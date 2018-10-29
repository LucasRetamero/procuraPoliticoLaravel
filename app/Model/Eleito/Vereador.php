<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;
use App\Model\Eleito\Eleito;

class Vereador extends Model
{
    private $objVereador;

    public function __construct(Eleito $obj){
    $this->objVereador = $obj;   
    }

    public function BuscarLista(){
     return $this->objVereador::all()
                                ->where('grupo_id',6);   
    }

    public function BuscarUm($id){
    return $this->objVereador::where('id',$id)
                                 ->where('grupo_id',6)
                                 ->get();    
    }
    public function BuscarQuantidadeVereador(){
    return $this->objVereador::where('grupo_id',6)
                                     ->count();
    }
}
