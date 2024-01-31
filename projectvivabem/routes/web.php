<?php

use App\Http\Controllers\administrativoController;
use App\Http\Controllers\alunoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\deshboardController;
use App\Http\Controllers\instrutorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Rota para a página "Home"
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rota para a página "Sobre"
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

// Rota para a página "Servico"
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');

// Rota para a página "Modalidade"
Route::get('/modalidade', [ModalidadeController::class, 'modalidade'])->name('treinoModalidade');

// Rota para a página "Notícias"
Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias');

// Rota para a página "Treino"
Route::get('/treino', [TreinoController::class, 'index'])->name('treino');

// Rota para a página "Contato"
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

// Rota de login
Route::get('/deshboard', [deshboardController::class, 'index'])->name('deshboard'); // chama o metodo index da class deshboardController
Route::post('/deshboard', [deshboardController::class, 'autenticar'])->name('deshboard'); //  Método que realiza o autenticação do usuário

//  Logout
Route::get('/deshboardPaginas/aluno', [alunoController::class, 'index'])->name('deshboardPaginas.aluno');
Route::get('/deshboardPaginas/instutor', [instrutorController::class, 'index'])->name('deshboardPaginas.instutor');
Route::get('/deshboardPaginas/administrativo', [administrativoController::class, 'index'])->name('deshboardPaginas.administrativo');

// Rotas de envio do formulário de contato
Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');

Route::post('/contato/enviarnew', [ContatoController::class, 'salvarEmail'])->name('contato.enviarnew');
