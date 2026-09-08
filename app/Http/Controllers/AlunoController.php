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

    // ===== ATV 11: as 4 consultas =====
    public function consultas()
    {
        $porCurso   = Aluno::doCurso('Engenharia de Software')->get();
        $porNome    = Aluno::nomeContem('Silv')->get();
        $recentes   = Aluno::recentes(7)->get();
        $quantidade = Aluno::count();

        return view('alunos.consultas', compact('porCurso', 'porNome', 'recentes', 'quantidade'));
    }

    // ===== CRUD =====
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        Aluno::create($request->only('nome', 'email', 'curso'));

        return redirect()->route('alunos.index')->with('sucesso', 'Aluno cadastrado!');
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

    public function update(Request $request, string $id)
    {
        Aluno::findOrFail($id)->update($request->only('nome', 'email', 'curso'));

        return redirect()->route('alunos.index')->with('sucesso', 'Aluno atualizado!');
    }

    public function destroy(string $id)
    {
        Aluno::findOrFail($id)->delete();

        return redirect()->route('alunos.index')->with('sucesso', 'Aluno removido!');
    }
}