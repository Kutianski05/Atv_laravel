<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h1>Cadastrar Aluno</h1>

    <a href="{{ route('alunos.index') }}">Voltar para a lista</a>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <p><label>Nome: <input type="text" name="nome"></label></p>
        <p><label>E-mail: <input type="email" name="email"></label></p>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>