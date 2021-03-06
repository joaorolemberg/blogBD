<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        
        
        return view('user.homepage');
    }

    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    
    public function auth(Request $request){

        $data=[
            'username'=> $request->get('username'),
            'password'=> $request->get('password')
        ];

        try{
            if(Auth::attempt($data,false)){
                
                return redirect()->route('user.homepage');
        
            }else{
                $user = $this->repository->findwhere(['username'=>$request->get('username')])->first();
                
                if(!$user){
                    throw new Exception("username nao encontrado");
                }else{
                    throw new Exception("Senha invalida");
                }

            
            }
        }catch(Exception $e){
            return $e->getMessage();
        }     
        
        dd($request->all());
        
    }
    public function auth2(){
        return redirect()->route('user.homepage');

    }


    public function logout(){
        //Auth::logout();
        return redirect()->route('user.login');
    }
    
    public function planetaHome(){
        return view('user.planeta');
    }
        
}
