<?php

use App\Http\Controllers\acessoController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\exmilitarController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController; // necessario instancia 
use App\Http\Controllers\utvController;
use App\Http\Controllers\VagasController;

use RealRashid\SweetAlert\Facades\Alert; // sweetAlert
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
Route::get('add/candidato',[CandidatoController::class,'formularioCandidato']); // chamando tela de formulario do candidato


Route::get('login/empresa',[EmpresaController::class,'index']); // chamando tela de login da empresa
Route::get('home/empresa',function(){
    return view('home_emp');
});
Route::post('/validar/empresa',[EmpresaController::class,'validarLogin']); // tela de login da empresa 
Route::get('add/empresa',[EmpresaController::class,'formularioEmpresa']); // tela de formulario cadastro de empresa
Route::post('/insert/empresa',[EmpresaController::class, 'store']); // submetendo formulario de empresa cadastro
Route::get('redefinir/empresa',[EmpresaController::class,'redefinirSenha']); // chamando tela de redefinir senha
Route::get('filtra/candidato/empresa',[EmpresaController::class,'filtroEmpresa']); // chamando tela de filtro candidato
Route::get('anucio/empresa',[EmpresaController::class,'anuciarVagas']); // chamndo tela de anucio
Route::post('/filtra/candidato/empresa',[EmpresaController::class,'filtrarCandidato']); // filtrando candidato 
Route::post('/anucie/vaga/empresa',[VagasController::class,'anucieVagas']);

Route::get('login/acesso',[acessoController::class,'index']);   // tela de acesso area administrativa
Route::get('login/utv',[utvController::class,'index']);  // tela de acesso a utv

