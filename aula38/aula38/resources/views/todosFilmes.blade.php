<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Listas de Filmes</title>
</head>
<body>

    @if(isset($edicaoSucesso) && $edicaoSucesso)
        Filme atualizado com sucesso! <br>
    @endif

    @foreach($filmes as $filme)
        {{ $filme->title }} - <a href="/filme/edit/{{ $filme->id }}">Editar</a> <a href="/filme/delete/{{ $filme->id }}">Remover</a> <br>
        Atores: {!! $filme->atoresListado->implode('first_name', ", ") !!}<br><br>
    @endforeach

    {{ $filmes->links() }}

</body>
</html>