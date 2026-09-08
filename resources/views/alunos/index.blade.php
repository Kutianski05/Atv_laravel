@extends('layouts.app')

@section('titulo', 'Lista de Alunos')

@section('conteudo')

    <a href="{{ route('alunos.create') }}">Novo aluno</a> |
    <a href="{{ route('alunos.consultas') }}">Consultas</a>

    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>

        @foreach ($alunos as $aluno)
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->email }}</td>
                <td>{{ $aluno->curso }}</td>
                <td>
                    <a href="{{ route('alunos.show', $aluno->id) }}">Ver</a>
                    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    @if ($alunos->isEmpty())
        <p>Nenhum aluno cadastrado.</p>
    @endif

@endsection