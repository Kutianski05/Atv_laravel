<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function() {
        return 'Sobre: página com informações gerais do sistema.';
});

Route::get('/alunos', function() {
    return 'Alunos: listagem dos alunos cadastrados.';
});

Route::get('/contato', function() {
    return 'Contato: fale conosco pelo email contato@email.com';
});

Route::get('/produto/{id}', function($id) {
    return "Exibindo o produto de ID: {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Exibindo a categoria de ID: {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o usuário de ID: {$id}";
});

Route::get('/', [AlunoController::class, 'home'])->name('home');
Route::get('/alunos', [AlunoController::class, 'index']) -> name ('alunos.index');
Route::get('/alunos/consultas', [AlunoController::class, 'consultas'])->name('alunos.consultas');
Route::get('/alunos/create',     [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos',           [AlunoController::class, 'store'])->name('alunos.store');
Route::get('/alunos/{id}',       [AlunoController::class, 'show'])->name('alunos.show');
Route::get('/alunos/{id}/edit',  [AlunoController::class, 'edit'])->name('alunos.edit');
Route::put('/alunos/{id}',       [AlunoController::class, 'update'])->name('alunos.update');
Route::delete('/alunos/{id}',    [AlunoController::class, 'destroy'])->name('alunos.destroy');
Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas.index');