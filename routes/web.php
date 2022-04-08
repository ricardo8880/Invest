<?php

use App\Http\Controllers\appController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', [appController::class, 'index'])->middleware('auth');
Route::get('/Cadastrar_acao', [appController::class, 'cadastrarAcao'])->middleware('auth');
Route::post('/cadastro', [appController::class, 'cadastroFeito'])->middleware('auth');
Route::get('/acoes', [appController::class, 'acoes'])->middleware('auth');
Route::get('/acao/{id}', [appController::class, 'acao'])->middleware('auth');
Route::get('/anuncio_acoes', [appController::class, 'anunciados'])->middleware('auth');
Route::get('/comprar/{id}', [appController::class, 'comprarAcao'])->middleware('auth');
Route::get('/minhas_acoes', [appController::class, 'minhasAcoes'])->middleware('auth');
Route::get('/deletar/{id}', [appController::class, 'deletar'])->middleware('auth');
Route::post('/update/{id}', [appController::class, 'update'])->middleware('auth');

Route::get('/#noticia', function(){
    return view('index');
});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
