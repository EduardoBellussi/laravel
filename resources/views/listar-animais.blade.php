@extends('_partials/main')

@section('conteudo')

    <div class="container">
      <h1 class="text-center my-5">Animais Disponíveis para Adoção</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Cachorro">
            <h3 class="mt-3">Rex</h3>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Porte:</strong> Médio</p>
            <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e adora crianças.</p>
            <a href="#" class="btn btn-primary w-100">Mais Detalhes</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Gato">
            <h3 class="mt-3">Mimi</h3>
            <p><strong>Idade:</strong> 1 ano</p>
            <p><strong>Porte:</strong> Pequeno</p>
            <p><strong>Descrição:</strong> Mimi é uma gatinha carinhosa e tranquila.</p>
            <a href="#" class="btn btn-primary w-100">Mais Detalhes</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Cachorro">
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