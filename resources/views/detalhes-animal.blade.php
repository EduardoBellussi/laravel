@extends('_partials/main')

@section('conteudo')

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

    @endsection