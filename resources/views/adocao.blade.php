@extends('_partials/main')

@section('conteudo')

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

    
    @endsection