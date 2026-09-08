@extends('layouts.app')

@section('titulo', 'Turmas e Alunos')

@section('conteudo')

    @forelse ($turmas as $turma)
        <h3>{{ $turma->nome }} ({{ $turma->turno ?? 'Turno não informado' }})</h3>

        @if ($turma->alunos->isEmpty())
            <p>Nenhum aluno vinculado a esta turma.</p>
        @else
            <ul>
                @foreach ($turma->alunos as $aluno)
                    <li>{{ $aluno->nome }} — {{ $aluno->email }} ({{ $aluno->curso }})</li>
                @endforeach
            </ul>
        @endif

        <hr>
    @empty
        <p>Nenhuma turma cadastrada.</p>
    @endforelse

@endsection