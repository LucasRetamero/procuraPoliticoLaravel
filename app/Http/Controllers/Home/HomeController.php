<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Index(){
       $ativo = 1;
       $nomeMenu = "Cargos";
        return view('home.iniciar.index',compact('ativo','nomeMenu'));   
    }
}
