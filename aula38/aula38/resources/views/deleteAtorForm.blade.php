<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Deletar Ator</title>
    </head>
    <body>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <h1 align="center">Formulário</h1>
        <form method="post" action="/ator/delete/{{ $ator->id }}">
        <!-- {{csrf_field()}} -->
        @csrf
        {{ method_field('DELETE') }}
            <div class="form-group col-6 m-auto">
                <label for="Nome">Nome</label>
                <input type="text" class="form-control" name="title" id="titulo" value="{{ $ator->first_name }}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="Sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="rating" id="classificacao" value="{{ $ator->last_name }}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Classificação</label>
                <input type="text" class="form-control" name="rating" id="rating" value="{{ $ator->rating }}"/>
            </div>         
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Deletar Ator" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
