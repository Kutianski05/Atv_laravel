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
