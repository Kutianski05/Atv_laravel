@extends('layouts.app')

@section('titulo', 'Lista de Alunos')

@section('conteudo')
    <div class="max-w-5xl mx-auto py-6 px-4 text-gray-900 dark:text-gray-100">
        <h1 class="text-2xl font-bold mb-4">Alunos Cadastrados</h1>

        @if (session('sucesso'))
            <p class="text-green-600 dark:text-green-400 font-semibold mb-4">{{ session('sucesso') }}</p>
        @endif

        <a href="{{ route('alunos.create') }}"
           class="inline-block mb-4 px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
            + Novo Aluno
        </a>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 dark:border-gray-700 text-left">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">ID</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Nome</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Curso</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">E-mail</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($alunos as $aluno)
                        <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                            <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">{{ $aluno->id }}</td>
                            <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">{{ $aluno->nome }}</td>
                            <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">{{ $aluno->curso }}</td>
                            <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">{{ $aluno->email ?? '-' }}</td>
                            <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700 space-x-2">
                                <a href="{{ route('alunos.show', $aluno->id) }}" class="text-blue-600 dark:text-blue-400 hover:underline">Ver</a>
                                <a href="{{ route('alunos.edit', $aluno->id) }}" class="text-yellow-600 dark:text-yellow-400 hover:underline">Editar</a>
                                <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="inline"
                                      onsubmit="return confirm('Tem certeza que deseja excluir este aluno?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 dark:text-red-400 hover:underline">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-4 text-center text-gray-500">Nenhum aluno cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection