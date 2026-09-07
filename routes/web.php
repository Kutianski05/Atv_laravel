<?php

use Illuminate\Support\Facades\Route;

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