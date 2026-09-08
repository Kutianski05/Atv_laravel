@extends('layouts.app')
@section('titulo', 'Alunos da Turma')
@section('conteudo')
    <div class="max-w-3xl mx-auto py-6 px-4 text-gray-900 dark:text-gray-100">
        <h1 class="text-2xl font-bold mb-4">Alunos da turma: {{ $turma->nome }}</h1>
        <ul class="list-disc pl-5">
            @forelse ($alunos as $aluno)
                <li>{{ $aluno->nome }} — {{ $aluno->curso }}</li>
            @empty
                <li>Nenhum aluno nesta turma ainda.</li>
            @endforelse
        </ul>
        <a href="{{ route('turmas.index') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Voltar</a>
    </div>
@endsection