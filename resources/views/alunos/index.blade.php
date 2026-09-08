<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>

    <a href="{{ route('alunos.create') }}">Novo aluno</a>

    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        @forelse ($alunos as $aluno)
            <tr>
                <td>{{ $aluno['id'] }}</td>
                <td>{{ $aluno['nome'] }}</td>
                <td>
                    <a href="{{ route('alunos.show', $aluno['id']) }}">Ver</a>
                    <a href="{{ route('alunos.edit', $aluno['id']) }}">Editar</a>
                    <form action="{{ route('alunos.destroy', $aluno['id']) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3">Nenhum aluno cadastrado.</td></tr>
        @endforelse
    </table>
</body>
</html>