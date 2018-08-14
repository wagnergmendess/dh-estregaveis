{{ $genero->name }}
<br>
Ranking: {{ $genero->ranking }}
<br>
Ativo: {{ $genero->getIsActive() }}
<br>
<br>
@if(count($genero->filmes) < 1)
{{ "Não há filmes nesse gênero." }}
@else
{!! $genero->filmes->implode('title','<br>') !!}
@endif