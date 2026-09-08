@extends('layouts.app')

@section('titulo', 'Página Inicial')

@section('conteudo')
    <p>Bem-vindo ao sistema de gerenciamento de alunos.</p>

    @if ($alunos->count() > 0)
        <p>Existem {{ $alunos->count() }} alunos cadastrados no momento.</p>
    @else
        <p>Nenhum aluno cadastrado ainda.</p>
    @endif
@endsection