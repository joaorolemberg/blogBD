<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses'  => 'Controller@homepage']);
Route::get('/cadastro', ['uses'  => 'Controller@cadastrarUsuario']);

Route::get('/login', ['uses'  => 'Controller@fazerLogin']);
Route::post('/login', ['as'=>'user.login','uses'  => 'DashboardController@auth']);
//Route::get('/homepage', ['as'=>'user.homepage','uses'  => 'DashboardController@index'])->middleware(['authUser']);

Route::group(['middleware'=>['auth']],function(){

    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('user.login');
    });

    Route::get('/homepage', ['as'=>'user.homepage','uses'  => 'DashboardController@index']);



});


