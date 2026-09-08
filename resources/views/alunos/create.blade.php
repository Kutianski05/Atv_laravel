@extends('layouts.app')

@section('titulo', 'Cadastrar Aluno')

@section('conteudo')
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <p><label>Nome: <input type="text" name="nome"></label></p>
        <p><label>E-mail: <input type="email" name="email"></label></p>
        <p><label>Curso: <input type="text" name="curso"></label></p>
        <button type="submit">Salvar</button>
    </form>
@endsection