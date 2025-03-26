@extends('_partials/main')

@section('conteudo')

    <!-- Container de Detalhes -->
    <div class="container">
      <div class="animal-details-container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ8PHVMZ5StJCLwGSunWEMbobwzNq324WB3Q&s" alt="Rex" class="animal-details-img">
        <h2 class="animal-details-title">Rex</h2>
        <p class="animal-details-text">Rex é um cachorro brincalhão e cheio de energia. Ele adora passeios ao ar livre, brincar com bolinhas e receber carinho. Rex é muito sociável e se dá bem com crianças e outros animais.</p>
        <ul class="animal-details-list">
          <li><strong>Idade:</strong> 2 anos</li>
          <li><strong>Porte:</strong> Médio</li>
          <li><strong>Temperamento:</strong> Ativo, carinhoso e brincalhão</li>
          <li><strong>Saúde:</strong> Vacinado e castrado</li>
          <li><strong>Localização:</strong> São Paulo, SP</li>
        </ul>
        <button class="btn btn-contact">Entrar em contato para adoção</button>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @endsection
 