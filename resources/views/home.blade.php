@extends('layouts.app')

@section('titulo', 'Página Inicial')

@section('conteudo')
    <p>Bem-vindo ao sistema de gerenciamento de alunos.</p>

    @if (count($alunos) > 0)
        <p>Existem {{ count($alunos) }} alunos cadastrados no momento.</p>
    @else
        <p>Nenhum aluno cadastrado ainda.</p>
    @endif
@endsection