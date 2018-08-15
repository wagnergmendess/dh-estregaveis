<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Listas de Atores</title>
</head>
<body>

    @if(isset($edicaoSucesso) && $edicaoSucesso)
        Ator atualizado com sucesso! <br>
    @endif

    @foreach($atores as $ator)
        {{ $ator->first_name }} - <a href="/ator/edit/{{ $ator->id }}">Editar</a> <a href="/ator/delete/{{ $ator->id }}">Remover</a> <br>
    @endforeach

        {{ $atores->links() }}

</body>
</html>