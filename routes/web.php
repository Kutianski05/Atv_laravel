<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/sobre', function () {
    return 'Sistema de gerenciamento de alunos - Trabalho de Laravel.';
});

Route::get('/contato', function () {
    return 'Contato: contato@escola.com';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto número: {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria número: {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuário número: {$id}";
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('alunos', AlunoController::class);

    Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas.index');
    Route::get('/turmas/{turma}', [TurmaController::class, 'show'])->name('turmas.show');

    Route::get('/home', [AlunoController::class, 'home'])->name('home');
    Route::get('/alunos-consultas', [AlunoController::class, 'consultas'])->name('alunos.consultas');
});

Route::get('/admin', function () {
    return 'Bem-vindo, admin!';
})->middleware(['auth', 'role:admin']);

Route::get('/professor', function () {
    return 'Bem-vindo, professor!';
})->middleware(['auth', 'role:admin,professor']);


require __DIR__.'/auth.php';