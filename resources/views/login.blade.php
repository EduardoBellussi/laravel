@extends('_partials/main')

@section('conteudo')

    <div class="login-container">
      <h2 class="text-center">Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
        <p class="text-center mt-3">
          <a href="#" style="color: #56BFA1;">Esqueceu a senha?</a>
        </p>
        <p class="text-center">
          Não tem uma conta? <a href="#" style="color: #56BFA1;">Cadastre-se</a>
        </p>
      </form>
    </div>


@endsection