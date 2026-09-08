<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
</head>
<body>
    <h1>Editar Aluno</h1>

    <a href="{{ route('alunos.index') }}">Voltar para a lista</a>

    <form action="{{ route('alunos.update', $aluno['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <p><label>Nome: <input type="text" name="nome" value="{{ $aluno['nome'] }}"></label></p>
        <p><label>E-mail: <input type="email" name="email" value="{{ $aluno['email'] }}"></label></p>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>