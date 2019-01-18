<?php

namespace App\Model\Eleito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Eleito extends Model
{
    protected $fillable = ['partido_id','grupo_id','imagem','nome',
                           'naturalidade','nascimento','sexo','estado','gabinete','telefone',
                           'email','site','escritorio','escolaridade','status'];
    protected $guarded = ['admin'];
    
    public function BuscarTodos(){
    return Eleito::all();    
    }

    public function BuscarNome($nome,$id){
    return Eleito::all()
            ->where('nome',$nome)
            ->where('grupo_id',$id);
    }

    public function BuscarPartido($partido,$id){
    return Eleito::all()
                 ->where('partido_id',$partido)
                 ->where('grupo_id',$id);
    }

    public function BuscarEstado($estado,$id){
        return Eleito::all()
                     ->where('estado',$estado)
                     ->where('grupo_id',$id);
    }

    public function BuscarSexo($sexo,$id){
        return Eleito::all()
                     ->where('sexo',$sexo)
                     ->where('grupo_id',$id);
    }

    public function BuscarPartEstSex($partido,$estado,$sexo,$id){
        return Eleito::all()
                     ->where('partido_id',$partido)
                     ->where('grupo_id',$id)
                     ->where('sexo',$sexo)
                     ->where('estado',$estado);  
    }

    public function BuscarPartidoEstado($partido,$estado,$id){
        return Eleito::all()
                     ->where('partido_id',$partido)
                     ->where('grupo_id',$id)
                     ->where('estado',$estado);
    }

    public function BuscarPartidoSexo($partido,$sexo,$id){
        return Eleito::all()
                     ->where('partido_id',$partido)
                     ->where('grupo_id',$id)
                     ->where('sexo',$sexo);
    }

    public function BuscarEstadoSexo($estado,$sexo,$id){
        return Eleito::all()
                     ->where('grupo_id',$id)
                     ->where('sexo',$sexo)
                     ->where('estado',$estado);
    }

    public function BuscarQuantidadeEleitos(){
    return Eleito::all()
                  ->count();    
    }

    public function BuscarUltimoEleito(){
    return Eleito::all()
                  ->pluck('id')
                  ->max();    
    }
    
    public function BuscarUnicoEleito($id){
    return Eleito::where('id',$id)
                   ->get();
    }
    
    public function EditarEleitor($id,$dados){
    return Eleito::where('id',$id)
                   ->update($dados);
    }

    public function Remover($id){
    return Eleito::where('id',$id)
                ->delete();    
    }
}
