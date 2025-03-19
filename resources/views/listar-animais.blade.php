<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #C4EEF2; /* Cor de fundo da página */
      }
      .animal-header {
        background-color: #025159; /* Cor do cabeçalho */
        color: #FFFFFF;
        padding: 20px 0;
        text-align: center;
        margin-bottom: 30px;
      }
      .animal-header h1 {
        margin: 0;
        font-size: 2.5rem;
      }
      .animal-card {
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        overflow: hidden;
      }
      .animal-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }
      .animal-card-body {
        padding: 15px;
      }
      .animal-card-title {
        color: #025159; /* Cor do título do card */
        font-size: 1.25rem;
        margin-bottom: 10px;
      }
      .animal-card-text {
        color: #3F858C; /* Cor do texto do card */
        font-size: 0.9rem;
      }
      .btn-details {
        background-color: #A67458; /* Cor do botão */
        border: none;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        color: #FFFFFF;
        font-size: 16px;
        margin-top: 10px;
      }
      .btn-details:hover {
        background-color: #7AB8BF; /* Cor do botão ao passar o mouse */
      }
    </style>
  </head>
  <body>
    <!-- Cabeçalho -->
    <div class="animal-header">
      <h1>Animais para Adoção</h1>
    </div>

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
  </body>
</html>