@extends('_partials/main')

@section('conteudo')


    <!-- Lista de Animais -->
    <div class="container">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ8PHVMZ5StJCLwGSunWEMbobwzNq324WB3Q&s" alt="Rex">
            <div class="animal-card-body">
              <h5 class="animal-card-title">Rex</h5>
              <p class="animal-card-text">Um cachorro brincalhão e cheio de energia. Adora passeios e brincadeiras ao ar livre.</p>
              <a href="/detalhes-animal" class="btn btn-details">Ver detalhes</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Luna">
            <div class="animal-card-body">
              <h5 class="animal-card-title">Luna</h5>
              <p class="animal-card-text">Uma gata tranquila e carinhosa. Perfeita para quem busca um companheiro calmo.</p>
              <button class="btn btn-details">Ver detalhes</button>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Bolinha">
            <div class="animal-card-body">
              <h5 class="animal-card-title">Bolinha</h5>
              <p class="animal-card-text">Um coelho curioso e amigável. Adora cenouras e brincar em espaços abertos.</p>
              <button class="btn btn-details">Ver detalhes</button>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Thor">
            <div class="animal-card-body">
              <h5 class="animal-card-title">Thor</h5>
              <p class="animal-card-text">Um cachorro forte e protetor. Ideal para famílias que buscam um guardião.</p>
              <button class="btn btn-details">Ver detalhes</button>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Mimi">
            <div class="animal-card-body">
              <h5 class="animal-card-title">Mimi</h5>
              <p class="animal-card-text">Uma gatinha brincalhona e curiosa. Adora explorar novos ambientes.</p>
              <button class="btn btn-details">Ver detalhes</button>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Pipoca">
            <div class="animal-card-body">
              <h5 class="animal-card-title">Pipoca</h5>
              <p class="animal-card-text">Um hamster divertido e ativo. Perfeito para quem gosta de animais pequenos e animados.</p>
              <button class="btn btn-details">Ver detalhes</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection


