@extends('layouts.app')

@section('titulo', 'Detalhes do Aluno')

@section('conteudo')
    <p><strong>ID:</strong> {{ $aluno['id'] }}</p>
    <p><strong>Nome:</strong> {{ $aluno['nome'] }}</p>

    @if (!empty($aluno['email']))
        <p><strong>E-mail:</strong> {{ $aluno['email'] }}</p>
    @else
        <p><em>Este aluno não possui e-mail cadastrado.</em></p>
    @endif

    <a href="{{ route('alunos.edit', $aluno['id']) }}">Editar</a>
    <a href="{{ route('alunos.index') }}">Voltar</a>
@endsection