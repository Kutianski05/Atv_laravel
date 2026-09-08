@extends('layouts.app')

@section('titulo', 'Consultas')

@section('conteudo')

    <h2>1. Alunos do curso de Engenharia de Software</h2>
    <ul>
        @foreach ($porCurso as $aluno)
            <li>{{ $aluno->nome }} &mdash; {{ $aluno->curso }}</li>
        @endforeach
    </ul>

    <h2>2. Alunos cujo nome contém "Silv"</h2>
    <ul>
        @foreach ($porNome as $aluno)
            <li>{{ $aluno->nome }}</li>
        @endforeach
    </ul>

    <h2>3. Cadastrados nos últimos 7 dias</h2>
    @if ($recentes->isEmpty())
        <p>Nenhum aluno cadastrado recentemente.</p>
    @else
        <ul>
            @foreach ($recentes as $aluno)
                <li>{{ $aluno->nome }} &mdash; {{ $aluno->created_at->format('d/m/Y H:i') }}</li>
            @endforeach
        </ul>
    @endif

    <h2>4. Quantidade total de alunos</h2>
    <p><strong>{{ $quantidade }}</strong> alunos cadastrados.</p>

@endsection