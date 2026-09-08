@extends('layouts.app')

@section('titulo', 'Detalhes do Aluno')

@section('conteudo')
    <p><strong>ID:</strong> {{ $aluno->id }}</p>
    <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
    <p><strong>Curso:</strong> {{ $aluno->curso }}</p>

    @if (!empty($aluno->email))
        <p><strong>E-mail:</strong> {{ $aluno->email }}</p>
    @else
        <p><em>Este aluno não possui e-mail cadastrado.</em></p>
    @endif

    <p><small>Cadastrado em {{ $aluno->created_at->format('d/m/Y H:i') }}</small></p>

    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
    <a href="{{ route('alunos.index') }}">Voltar</a>
@endsection