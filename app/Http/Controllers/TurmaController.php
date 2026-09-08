<?php

namespace App\Http\Controllers;

use App\Models\Turma;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::with('alunos')->get();

        return view('turmas.index', compact('turmas'));
    }
}