<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #C4EEF2; /* Cor de fundo da página */
      }
      .register-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }
      .register-container h2 {
        color: #025159; /* Cor do título */
        text-align: center;
        margin-bottom: 20px;
      }
      .form-control {
        border-radius: 5px;
        border: 1px solid #7AB8BF; /* Cor da borda dos campos */
      }
      .form-control:focus {
        border-color: #3F858C; /* Cor da borda ao focar */
        box-shadow: 0 0 5px rgba(63, 133, 140, 0.5); /* Sombra ao focar */
      }
      .btn-register {
        background-color: #A67458; /* Cor do botão */
        border: none;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        color: #FFFFFF;
        font-size: 16px;
      }
      .btn-register:hover {
        background-color: #7AB8BF; /* Cor do botão ao passar o mouse */
      }
      .login-link {
        color: #3F858C; /* Cor do link */
        text-align: center;
        display: block;
        margin-top: 10px;
      }
      .login-link:hover {
        color: #025159; /* Cor do link ao passar o mouse */
      }
    </style>
  </head>
  <body>
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
  </body>
</html>