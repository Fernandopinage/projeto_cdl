<?php

use App\Http\Controllers\acessoController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\exmilitarController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController; // necessario instancia 
use App\Http\Controllers\utvController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[homeController::class, 'index']); // home do projeto

Route::get('login/militar',[indexController::class, 'index']); // chamando tela de index login
Route::get('busca/militar', [exmilitarController::class, 'index']); // chamando tela busca 

Route::get('login/candidato',[CandidatoController::class, 'index']); // chamando tela de candidatos
Route::get('busca/candidato', [CandidatoController::class, 'selectCandidato']); // chamando tela  busca candidato 
Route::get('add/candidato',function(){
    return view('add_candidato');
}); // creat candidato

Route::get('add/empresa',function(){

    return view('add_empresa');
});


Route::get('login/acesso',[acessoController::class,'index']);   // tela de acesso area administrativa
Route::get('login/utv',[utvController::class,'index']);  // tela de acesso a utv

