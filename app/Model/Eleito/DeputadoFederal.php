<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;
use App\Model\Eleito\Eleito;

class DeputadoFederal extends Model
{
  private $objDeputado;

  public function __construct(Eleito $obj){
  $this->objDeputado = $obj;    
  }

  public function BuscarLista(){
  return $this->objDeputado::all()
                           ->where('grupo_id',2);    
  }

  public function BuscarUm($id){
  return $this->objDeputado::where('id',$id)
                            ->where('grupo_id',2)
                            ->get();
  }
  public function BuscarQuantidadeDeputadoFederal(){
  return $this->objDeputado::where('grupo_id',2)
                            ->count();
  }
}
