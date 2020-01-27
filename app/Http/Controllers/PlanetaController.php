<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;
use Auth;

class PlanetaController extends Controller
{
    public function inserir(Request $request){
        
        return view('user.planetaInserir');

    }
    public function inserirPlaneta(Request $request){
        
        echo 'inserido com sucesso';

    }

    public function consultar(Request $request){
        
        return view('user.planetaConsultar');

    }

    public function consultarPlaneta(Request $request){
        $id = $request->get('id');

        $nome= 'Jupiter';
        $tamanho='100';
        $massa='100';
        $gravidade='10';
        $composicao='10% Helio 1% Oxigenio';

        return view('user.planetaConsultarBD',[
            'id'=>$id,
            'nome'=>$nome,
            'tamanho'=>$tamanho,
            'massa'=>$massa,
            'gravidade'=>$gravidade,
            'composicao'=>$composicao
            ]);

        

    }

    public function consultarPlanetaBD(Request $request){
        
        return view('user.planetaConsultarBD');

    }

    public function alterar(Request $request){
        
        
        return view('user.planetaAlterar');

    }

   
    public function alterarPlaneta(Request $request){
        
        $id = $request->get('id');
        

        $nome= 'Jupiter';
        $tamanho='100';
        $massa='100';
        $gravidade='10';
        $composicao='10% Helio 1% Oxigenio';
        
        return redirect()->route('user.planetasAlterarBD',['id'=>$id]);
        
        
    }
        


    

    public function alterarBD(Request $request){

        //dd($request->all()); 

        $id=$request->get('id');;
        $nome= 'Jupiter';
        $tamanho='100';
        $massa='100';
        $gravidade='10';
        $composicao='10% Helio 1% Oxigenio';
        
        
        return view('user.planetaAlterarBD',[
            'id'=>$id,
            'nome'=>$nome,
            'tamanho'=>$tamanho,
            'massa'=>$massa,
            'gravidade'=>$gravidade,
            'composicao'=>$composicao
            ]);
        
    }

    public function alterarPlanetaBD(Request $request){
        
        
        echo 'alterado com sucesso';

    }

    public function excluir(Request $request){
        
        return view('user.planetaExcluir');

    }

    public function excluirPlaneta(Request $request){
        
        $id = $request->get('id');
        return redirect()->route('user.planetasExcluirBD',['id'=>$id]);
        

    }

    public function excluirBD(Request $request){
        
        $id=$request->get('id');;
        $nome= 'Jupiter';
        $tamanho='100';
        $massa='100';
        $gravidade='10';
        $composicao='10% Helio 1% Oxigenio';
        
        
        return view('user.planetaExcluirBD',[
            'id'=>$id,
            'nome'=>$nome,
            'tamanho'=>$tamanho,
            'massa'=>$massa,
            'gravidade'=>$gravidade,
            'composicao'=>$composicao
            ]);
        
    }

    public function excluirPlanetaBD(Request $request){
        
        echo 'Excluido com sucesso';

    }



}
