<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['nome'];
    protected $guarded = ['admin'];
    public $timestamps = false;
    private $objEstado;
    
   public function BuscarEstados(){
    return Estado::all();
    }
}
