<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Aluno</title>
</head>
<body>
    <h1>Detalhes do Aluno</h1>

    <a href="{{ route('alunos.index') }}">Voltar para a lista</a>

    <p><strong>ID:</strong> {{ $aluno['id'] }}</p>
    <p><strong>Nome:</strong> {{ $aluno['nome'] }}</p>
    <p><strong>E-mail:</strong> {{ $aluno['email'] }}</p>

    <a href="{{ route('alunos.edit', $aluno['id']) }}">Editar</a>
</body>
</html>