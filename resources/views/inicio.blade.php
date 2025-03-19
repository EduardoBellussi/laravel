
@extends('_partials/main')

@section('conteudo')
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Adotar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <h1 class="display-4">Encontre seu novo melhor amigo!</h1>
      <p class="lead">Adotar um animal é um ato de amor. Dê um lar para quem precisa.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Ver animais para adoção</a>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Como Adotar</h2>
          <p>Adotar um animal é fácil! Basta seguir os passos abaixo:</p>
          <ol>
            <li>Escolha o animal que você deseja adotar.</li>
            <li>Preencha o formulário de adoção.</li>
            <li>Aguarde o contato da nossa equipe para agendar uma visita.</li>
            <li>Leve seu novo amigo para casa!</li>
          </ol>
        </div>
        <div class="col-md-6">
          <h2>Por que Adotar?</h2>
          <p>Adotar um animal traz muitos benefícios:</p>
          <ul>
            <li>Você salva uma vida.</li>
            <li>Ganha um companheiro leal e amoroso.</li>
            <li>Ajuda a reduzir o número de animais abandonados.</li>
            <li>Promove a conscientização sobre a adoção responsável.</li>
          </ul>
        </div>
      </div>
    </div>
    <footer class="footer text-center">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>
@endsection

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  </head>
  <body>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>