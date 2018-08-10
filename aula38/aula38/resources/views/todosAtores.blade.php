@if(isset($edicaoSucesso) && $edicaoSucesso)
    Ator atualizado com sucesso! <br>
@endif

@foreach($atores as $ator)
    {{ $ator->first_name }} - <a href="/ator/edit/{{ $ator->id }}">Editar</a> <a href="/ator/delete/{{ $ator->id }}">Remover</a> <br>
@endforeach