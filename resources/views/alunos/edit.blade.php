@extends('layouts.app')

@section('titulo', 'Editar Aluno')

@section('conteudo')
    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p><label>Nome: <input type="text" name="nome" value="{{ old('nome', $aluno->nome) }}"></label></p>
        <p><label>E-mail: <input type="email" name="email" value="{{ old('email', $aluno->email) }}"></label></p>
        <p><label>Curso: <input type="text" name="curso" value="{{ old('curso', $aluno->curso) }}"></label></p>
        <button type="submit">Atualizar</button>
        <a href="{{ route('alunos.index') }}">Cancelar</a>
    </form>
@endsection