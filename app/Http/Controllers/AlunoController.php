<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;

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

    public function index()
    {
        $alunos = Aluno::orderBy('nome')->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        $dados = $request->validated();

        Aluno::create($dados);

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $dados = $request->validated();

        $aluno->update($dados);

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', "Aluno {$aluno->nome} removido com sucesso!");
    }
}