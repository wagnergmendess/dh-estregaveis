@if(isset($edicaoSucesso) && $edicaoSucesso)
    Filme atualizado com sucesso!
@endif

@foreach($filmes as $filme)
    {{ $filme->title }} - <a href="/filme/edit/{{ filme->id }}">Editar</a> <a href="/filme/delete/{{ filme->id }}">Remover</a> <br>
@endforeach