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

Route::get('/', ['uses'  => 'Controller@fazerLogin']);
Route::get('/cadastro', ['uses'  => 'Controller@cadastrarUsuario']);

Route::get('/login', ['uses'  => 'Controller@fazerLogin']);
Route::post('/login', ['as'=>'user.login','uses'  => 'DashboardController@auth2']);
//Route::get('/homepage', ['as'=>'user.homepage','uses'  => 'DashboardController@index'])->middleware(['authUser']);
Route::get('/logout',['as'=>'user.logout','uses'  => 'DashboardController@logout']);
Route::get('/homepage', ['as'=>'user.homepage','uses'  => 'DashboardController@index']);

Route::get('/planeta', ['as'=>'user.planetas','uses'  => 'DashboardController@planetaHome']);

Route::get('/planeta/inserir', ['as'=>'user.planetasInserir','uses'  => 'PlanetaController@inserir']);
Route::post('/planeta/inserir', ['as'=>'user.planetasInserir','uses'  => 'PlanetaController@inserirPlaneta']);

Route::get('/planeta/consultar', ['as'=>'user.planetasConsultar','uses'  => 'PlanetaController@consultar']);
Route::post('/planeta/consultar', ['as'=>'user.planetasConsultar','uses'  => 'PlanetaController@consultarPlaneta']);

Route::get('/planeta/consultar/BD', ['as'=>'user.planetasConsultarBD','uses'  => 'PlanetaController@consultarBD']);

Route::get('/planeta/alterar', ['as'=>'user.planetasAlterar','uses'  => 'PlanetaController@alterar']);
Route::post('/planeta/alterar', ['as'=>'user.planetasAlterar','uses'  => 'PlanetaController@alterarPlaneta']);

Route::get('/planeta/alterar/BD', ['as'=>'user.planetasAlterarBD','uses'  => 'PlanetaController@alterarBD']);
Route::post('/planeta/alterar/BD', ['as'=>'user.planetasAlterarBD','uses'  => 'PlanetaController@alterarPlanetaBD']);

Route::get('/planeta/excluir', ['as'=>'user.planetasExcluir','uses'  => 'PlanetaController@excluir']);
Route::post('/planeta/excluir', ['as'=>'user.planetasExcluir','uses'  => 'PlanetaController@excluirPlaneta']);

Route::get('/planeta/excluir/BD', ['as'=>'user.planetasExcluirBD','uses'  => 'PlanetaController@excluirBD']);
Route::post('/planeta/excluir/BD', ['as'=>'user.planetasExcluirBD','uses'  => 'PlanetaController@excluirPlanetaBD']);




Route::group(['middleware'=>['auth']],function(){

});


