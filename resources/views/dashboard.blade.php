@extends('layouts.app')

@section('titulo', 'Dashboard')

@section('conteudo')
    <div class="max-w-3xl mx-auto py-6 px-4 text-gray-900 dark:text-gray-100">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg p-4 mb-6">
            Você está logado!
        </div>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('alunos.index') }}" class="block bg-blue-600 text-white rounded-lg p-4 text-center hover:bg-blue-700">
                Ver Alunos
            </a>
            <a href="{{ route('turmas.index') }}" class="block bg-blue-600 text-white rounded-lg p-4 text-center hover:bg-blue-700">
                Ver Turmas
            </a>
        </div>
    </div>
@endsection