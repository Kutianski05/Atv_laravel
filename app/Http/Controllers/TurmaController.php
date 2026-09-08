<?php

namespace App\Http\Controllers;

use App\Models\Turma;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index', compact('turmas'));
    }

    public function show(Turma $turma)
    {
        $alunos = $turma->alunos;
        return view('turmas.show', compact('turma', 'alunos'));
    }
}