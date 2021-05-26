<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\exmilitarController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController; // necessario instancia 
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
Route::get('login/acesso',function(){

    return view('acesso');
});