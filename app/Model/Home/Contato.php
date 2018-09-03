<?php

namespace App\Home;

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
}
