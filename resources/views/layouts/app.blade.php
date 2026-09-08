<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Sistema de Alunos')</title>
</head>
<body>

    @include('partials.menu')

    <h1>@yield('titulo')</h1>

    @yield('conteudo')

    <hr>
    <footer>
        <small>Atividade Laravel &mdash; João Vitor Kutianski</small>
    </footer>

</body>
</html>