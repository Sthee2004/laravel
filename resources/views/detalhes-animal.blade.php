@extends('_partials/main')

@section('conteudo')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Início</a>
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

    <!-- Detalhes do Animal -->
    <div class="container animal-details-container">
      <div class="row">
        <div class="col-md-6">
          <img src="https://t3.ftcdn.net/jpg/01/00/80/08/360_F_100800827_RbUfH5xgkYCj8GKMaPi4d9laRo1rRGEi.jpg" alt="Foto do Cachorro" class="animal-image">
        </div>
        <div class="col-md-6">
          <h2>Rex</h2>
          <div class="animal-info">
            <h5>Sobre</h5>
            <p>
              Rex é um cachorro muito brincalhão e cheio de energia. Ele adora correr no parque e é ótimo com crianças. Está procurando um lar amoroso para chamar de seu.
            </p>
          </div>
          <div class="animal-info">
            <h3>Informações</h3>
            <p><strong>Idade:</strong> 3 anos</p>
            <p><strong>Raça:</strong> Husky Siberiano</p>
            <p><strong>Porte:</strong> Grande</p>
            <p><strong>Sexo:</strong> Macho</p>
            <p><strong>Localização:</strong> Rio de Janeiro, RJ</p>
          </div>
          <button class="btn btn-adopt">Quero Adotar</button>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>
@endsection


    
