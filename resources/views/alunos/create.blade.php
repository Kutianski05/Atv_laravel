@extends('layouts.app')

@section('titulo', 'Cadastrar Aluno')

@section('conteudo')
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <p><label>Nome: <input type="text" name="nome" value="{{ old('nome') }}"></label></p>
        <p><label>E-mail: <input type="email" name="email" value="{{ old('email') }}"></label></p>
        <p><label>Curso: <input type="text" name="curso" value="{{ old('curso') }}"></label></p>
        <button type="submit">Salvar</button>
        <a href="{{ route('alunos.index') }}">Cancelar</a>
    </form>
@endsection