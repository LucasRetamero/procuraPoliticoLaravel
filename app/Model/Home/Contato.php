<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{   
    protected $fillable = ['nome','email','assunto','menssagem'];
    protected $guarded = ['admin'];
    public $rules = [
    'nome'  =>  'required',
    'email' =>  'required',
    'assunto' => 'required',
    'menssagem' => 'min:5|max:100'
    ];

    public function BuscarQuantidadeContato(){
    return Contato::all()
                    ->count();    
    }
    public function BuscarContato(){
    return Contato::all();    
    }
    public function show($id){
    return Contato::where('id',$id)
                   ->get();    
    }
    public function destryoer($id){
    return Contato::where('id',$id)
                   ->delete();    
    }
    public function FiltrarLista($assunto){
    return Contato::where('assunto','LIKE',"%$assunto%")
                   ->get();    
    }
        

}
