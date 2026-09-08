@extends('layouts.app')
@section('titulo', 'Turmas')
@section('conteudo')
    <div class="max-w-3xl mx-auto py-6 px-4 text-gray-900 dark:text-gray-100">
        <h1 class="text-2xl font-bold mb-4">Turmas</h1>
        <ul class="list-disc pl-5">
            @forelse ($turmas as $turma)
                <li>
                    <a href="{{ route('turmas.show', $turma->id) }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                        {{ $turma->nome }} ({{ $turma->turno }})
                    </a>
                </li>
            @empty
                <li>Nenhuma turma cadastrada.</li>
            @endforelse
        </ul>
    </div>
@endsection