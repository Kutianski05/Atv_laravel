<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // Lista fixa só para testar as views (o Model vem no próximo tema)
    private array $lista = [
        ['id' => 1, 'nome' => 'João Vitor',  'email' => 'joao@exemplo.com'],
        ['id' => 2, 'nome' => 'Maria Silva', 'email' => 'maria@exemplo.com'],
    ];

    public function index()
    {
        $alunos = $this->lista;

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        return 'store(): salvando o novo aluno no banco.';
    }

    public function show(string $id)
    {
        $aluno = ['id' => $id, 'nome' => 'João Vitor', 'email' => 'joao@exemplo.com'];

        return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        $aluno = ['id' => $id, 'nome' => 'João Vitor', 'email' => 'joao@exemplo.com'];

        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, string $id)
    {
        return "update(): atualizando o aluno de ID {$id}.";
    }

    public function destroy(string $id)
    {
        return "destroy(): removendo o aluno de ID {$id}.";
    }
}