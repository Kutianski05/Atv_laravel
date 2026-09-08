<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function home()
    {
        $alunos = Aluno::all();

        return view('home', compact('alunos'));
    }

    public function consultas()
    {
        $porCurso   = Aluno::doCurso('Engenharia de Software')->get();
        $porNome    = Aluno::nomeContem('Silv')->get();
        $recentes   = Aluno::recentes(7)->get();
        $quantidade = Aluno::count();

        return view('alunos.consultas', compact('porCurso', 'porNome', 'recentes', 'quantidade'));
    }

    // READ - lista todos
    public function index()
    {
        $alunos = Aluno::orderBy('nome')->get();

        return view('alunos.index', compact('alunos'));
    }

    // CREATE - formulário
    public function create()
    {
        return view('alunos.create');
    }

    // CREATE - grava no banco
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome'  => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email',
            'curso' => 'required|string|max:255',
        ]);

        Aluno::create($dados);

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    // READ - exibe um
    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));
    }

    // UPDATE - formulário
    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.edit', compact('aluno'));
    }

    // UPDATE - grava a alteração
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $dados = $request->validate([
            'nome'  => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email,' . $aluno->id,
            'curso' => 'required|string|max:255',
        ]);

        $aluno->update($dados);

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    // DELETE
    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', "Aluno {$aluno->nome} removido com sucesso!");
    }
}