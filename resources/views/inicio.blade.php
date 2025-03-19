@extends('_partials/main')

@section('conteudo')
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom">
      <div class="container-fluid">
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

    <!-- Hero Section -->
    <section class="bg-light-custom text-center py-5">
      <div class="container">
        <h1 class="display-4 text-primary-custom">Dê um lar para um amigo</h1>
        <p class="lead text-secondary-custom">Encontre seu novo companheiro entre nossos animais resgatados.</p>
        <a href="#" class="btn btn-primary-custom btn-lg">Ver Animais</a>
      </div>
    </section>

    <!-- Featured Animals Section -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center text-primary-custom mb-5">Conheça nossos amigos</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ8PHVMZ5StJCLwGSunWEMbobwzNq324WB3Q&s" class="card-img-top" alt="Animal 1">
              <div class="card-body">
                <h5 class="card-title text-primary-custom">Rex</h5>
                <p class="card-text text-secondary-custom">Um cachorro brincalhão e cheio de energia.</p>
                <a href="/detalhes-animal" class="btn btn-primary-custom">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal 2">
              <div class="card-body">
                <h5 class="card-title text-primary-custom">Luna</h5>
                <p class="card-text text-secondary-custom">Uma gata tranquila e carinhosa.</p>
                <a href="#" class="btn btn-primary-custom">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal 3">
              <div class="card-body">
                <h5 class="card-title text-primary-custom">Bolinha</h5>
                <p class="card-text text-secondary-custom">Um coelho curioso e amigável.</p>
                <a href="#" class="btn btn-primary-custom">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

