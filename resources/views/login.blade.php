<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
      body {
        background-color: #F0E8E5;
        color: #BF8D7A;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .login-container {
        background-color: #FFFFFF;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
      }
      .login-container h2 {
        color: #BF8D7A;
        text-align: center;
        margin-bottom: 20px;
      }
      .form-control {
        background-color: #F0E8E5;
        border: 1px solid #C4B4B4;
        color: #BF8D7A;
      }
      .form-control:focus {
        background-color: #F0E8E5;
        border-color: #D9BCA3;
        box-shadow: 0 0 5px rgba(217, 188, 163, 0.5);
      }
      .btn-primary {
        background-color: #D9BCA3;
        border-color: #D9BCA3;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        color: #FFFFFF;
      }
      .btn-primary:hover {
        background-color: #BF8D7A;
        border-color: #BF8D7A;
      }
      .register-link {
        text-align: center;
        margin-top: 15px;
      }
      .register-link a {
        color: #BF8D7A;
        text-decoration: none;
        font-weight: bold;
      }
      .register-link a:hover {
        color: #D9BCA3;
      }
    </style>
  </head>
  
  <body>
    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
      <div class="register-link">
        <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>