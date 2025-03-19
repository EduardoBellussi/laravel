<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rex - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #F2E7DC;
        color: #012326;
      }
      .navbar {
        background-color: #012326;
      }
      .navbar-brand, .nav-link {
        color: #F2E7DC !important;
      }
      .btn-primary {
        background-color: #F27B35;
        border-color: #F27B35;
      }
      .btn-primary:hover {
        background-color: #F2A0A0;
        border-color: #F2A0A0;
      }
      .animal-details {
        background-color: #FFFFFF;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-top: 20px;
      }
      .animal-details img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        margin-bottom: 20px;
      }
      .footer {
        background-color: #012326;
        color: #F2E7DC;
        padding: 1rem 0;
        margin-top: 2rem;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Adotar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 class="text-center my-5">Rex</h1>
      <div class="animal-details">
        <div class="row">
          <div class="col-md-6">
            <img src="https://via.placeholder.com/600x400" alt="Rex">
          </div>
          <div class="col-md-6">
            <h2>Sobre Rex</h2>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Porte:</strong> Médio</p>
            <p><strong>Raça:</strong> Vira-lata</p>
            <p><strong>Sexo:</strong> Macho</p>
            <p><strong>Personalidade:</strong> Rex é um cachorro muito brincalhão, adora crianças e é extremamente sociável. Ele é cheio de energia e adora passeios ao ar livre.</p>
            <p><strong>História:</strong> Rex foi resgatado das ruas há um ano e desde então está em um lar temporário. Ele está pronto para encontrar uma família que o ame e cuide dele para sempre.</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <h3>Fotos Adicionais</h3>
            <div class="row">
              <div class="col-md-4">
                <img src="https://via.placeholder.com/300x200" alt="Rex 1">
              </div>
              <div class="col-md-4">
                <img src="https://via.placeholder.com/300x200" alt="Rex 2">
              </div>
              <div class="col-md-4">
                <img src="https://via.placeholder.com/300x200" alt="Rex 3">
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <h3>Formulário de Interesse</h3>
            <form>
              <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
              </div>
              <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
              </div>
              <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" rows="3" placeholder="Digite uma mensagem (opcional)"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Tenho Interesse em Adotar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>