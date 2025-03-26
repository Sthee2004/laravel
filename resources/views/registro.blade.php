@extends('_partials/main')

@section('conteudo')
    <div class="register-container">
      <h2>Registro</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" placeholder="Digite seu nome" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirme sua senha</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirme sua senha" required>
        </div>
        <button type="submit" class="btn btn-register">Registrar</button>
        <a href="login.html" class="login-link">Já tem uma conta? Faça login</a>
      </form>
    </div>
    
    
   
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 @endsection
