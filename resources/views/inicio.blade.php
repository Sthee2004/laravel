@extends('_partials/main')

@section('conteudo')
 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Highlight Section -->
    <section class="highlight text-center">
      <div class="container">
        <h1 class="display-4">Dê um lar para um amigo</h1>
        <p class="lead">Encontre o companheiro perfeito e faça a diferença na vida de um animal de rua.</p>
        <a href="#" class="btn btn-primary btn-lg">Ver Animais para Adoção</a>
      </div>
    </section>

    <!-- Info Section -->
    <section class="container my-5">
      <div class="row">
        <div class="col-md-4 text-center">
          <h2>Por que adotar?</h2>
          <p>Adotar um animal de rua não só salva uma vida, mas também traz alegria e amor para o seu lar.</p>
        </div>
        <div class="col-md-4 text-center">
          <h2>Como adotar?</h2>
          <p>O processo de adoção é simples e seguro. Nós ajudamos você a encontrar o animal perfeito para a sua família.</p>
        </div>
        <div class="col-md-4 text-center">
          <h2>Ajude-nos</h2>
          <p>Se você não pode adotar, ainda pode ajudar fazendo uma doação ou sendo um lar temporário.</p>
        </div>
      </div>
    </section>

        <!-- Footer -->
        <footer class="footer text-center">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

@endsection

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #F2D1B3;
        color: #734E40;
      }
      .navbar {
        background-color: #8C4126;
      }
      .btn-primary {
        background-color: #BF8563;
        border-color: #BF8563;
        color: #F2D1B3;
      }
      .btn-primary:hover {
        background-color: #8C4126;
        border-color: #8C4126;
      }
      .highlight {
        background-color: #D9B5A0;
        padding: 50px 0;
        color: #734E40;
      }
      .footer {
        background-color: #8C4126;
        color: #F2D1B3;
        padding: 20px 0;
      }
      .nav-link {
        color: #F2D1B3 !important;
      }
      .nav-link:hover {
        color: #D9B5A0 !important;
      }
    </style>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>