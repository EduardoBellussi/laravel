<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre Nós - Patas Felizes</title>
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
      .about-section {
        background-color: #FFFFFF;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-top: 20px;
      }
      .animal-card {
        background-color: #FFFFFF;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 15px;
      }
      .animal-card img {
        border-radius: 8px;
        width: 100%;
        height: auto;
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
        <a class="navbar-brand" href="#">Patas Felizes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Sobre Nós</a>
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

    <div class="container">
      <h1 class="text-center my-5">Sobre a Patas Felizes</h1>
      <div class="about-section">
        <h2>Nossa Missão</h2>
        <p>A <strong>Patas Felizes</strong> é uma ONG dedicada ao resgate, cuidado e adoção de animais abandonados ou em situação de risco. Nosso objetivo é proporcionar um lar seguro e amoroso para cada animal que resgatamos, além de conscientizar a sociedade sobre a importância da adoção responsável.</p>

        <h2>O Que Fazemos</h2>
        <ul>
          <li>Resgatamos animais abandonados ou maltratados.</li>
          <li>Fornecemos cuidados veterinários, alimentação e carinho.</li>
          <li>Promovemos campanhas de adoção responsável.</li>
          <li>Educamos a comunidade sobre posse responsável de animais.</li>
        </ul>

        <h2>Como Você Pode Ajudar</h2>
        <p>Você pode contribuir de várias maneiras:</p>
        <ul>
          <li><strong>Adotando:</strong> Dê um lar para um animal resgatado.</li>
          <li><strong>Apadrinhando:</strong> Ajude a custear os cuidados de um animal.</li>
          <li><strong>Doando:</strong> Sua doação ajuda a manter nossos trabalhos.</li>
          <li><strong>Voluntariando:</strong> Participe ativamente dos nossos projetos.</li>
        </ul>
      </div>

      <h2 class="text-center my-5">Animais que Resgatamos</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://petcare.com.br/wp-content/uploads/2023/03/personalidade-cachorro-caramelo.jpg" alt="Rex">
            <h3 class="mt-3">Rex</h3>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Porte:</strong> Médio</p>
            <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e adora crianças.</p>
            <a href="#" class="btn btn-primary w-100">Mais Detalhes</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://adotar.com.br/painel/upload/2022-07/animais_imagem865483.webp" alt="Mimi">
            <h3 class="mt-3">Mimi</h3>
            <p><strong>Idade:</strong> 1 ano</p>
            <p><strong>Porte:</strong> Pequeno</p>
            <p><strong>Descrição:</strong> Mimi é uma gatinha carinhosa e tranquila.</p>
            <a href="#" class="btn btn-primary w-100">Mais Detalhes</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://www.agrosete.com.br/wp-content/uploads/2017/06/Vira-latas-conquistam-coracao-de-brasileiros.jpg" alt="Luna">
            <h3 class="mt-3">Luna</h3>
            <p><strong>Idade:</strong> 3 anos</p>
            <p><strong>Porte:</strong> Grande</p>
            <p><strong>Descrição:</strong> Luna é uma cachorra muito dócil e protetora.</p>
            <a href="#" class="btn btn-primary w-100">Mais Detalhes</a>
          </div>
        </div>
        <!-- Adicione mais cards conforme necessário -->
      </div>
    </div>

    <footer class="footer">
      <p>&copy; 2023 Patas Felizes. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>