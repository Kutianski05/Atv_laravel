@extends('layouts.app')

@section('titulo', 'Cadastrar Aluno')

@section('conteudo')
    <div class="max-w-md mx-auto py-6 px-4 text-gray-900 dark:text-gray-100">
        <h1 class="text-2xl font-bold mb-4">Cadastrar Aluno</h1>

        <form action="{{ route('alunos.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1">Nome:</label>
                <input type="text" name="nome" value="{{ old('nome') }}"
                       class="w-full border rounded px-3 py-2 dark:bg-gray-800 dark:border-gray-600">
                @error('nome')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1">E-mail:</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full border rounded px-3 py-2 dark:bg-gray-800 dark:border-gray-600">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1">Curso:</label>
                <input type="text" name="curso" value="{{ old('curso') }}"
                       class="w-full border rounded px-3 py-2 dark:bg-gray-800 dark:border-gray-600">
                @error('curso')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Salvar
                </button>
                <a href="{{ route('alunos.index') }}" class="text-blue-600 dark:text-blue-400 hover:underline self-center">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection