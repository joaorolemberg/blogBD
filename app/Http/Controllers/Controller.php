<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage(){
        return view('welcome');
    }
    
    public function cadastrarUsuario(){
        echo 'Tela de Cadastro de Usuários';
    }

    public function fazerLogin(){
        
        #echo 'Tela de Login';
        return view('user.login');
    }
}
