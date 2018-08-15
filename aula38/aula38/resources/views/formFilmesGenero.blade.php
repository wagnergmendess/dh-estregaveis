<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
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
        <form method="post" action="/validarGenero">
        <!-- {{csrf_field()}} -->
        @csrf
            <div class="form-group col-6 m-auto">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="title" id="titulo"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="rating" id="classificacao"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="premios">Prêmios</label>
                <input type="text" class="form-control" name="awards" id="premios"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="duracao">Duração</label>
                <input type="text" class="form-control" name="length" id="duracao"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="duracao">Data de Estreia</label>
                <input type="date" class="form-control" name="release_date" id="release_date"/>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
                <label for="genero">Gênero</label>
                <select name="genre_id">
                    @foreach ($genero as $genero)
                        <option value={{ $genero->id }}>{{ $genero->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
