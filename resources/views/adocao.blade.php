<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Animal - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #C4EEF2; /* Cor de fundo da página */
      }
      .register-animal-header {
        background-color: #025159; /* Cor do cabeçalho */
        color: #FFFFFF;
        padding: 20px 0;
        text-align: center;
        margin-bottom: 30px;
      }
      .register-animal-header h1 {
        margin: 0;
        font-size: 2.5rem;
      }
      .register-animal-container {
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 0 auto;
        max-width: 800px;
      }
      .form-control {
        border-radius: 5px;
        border: 1px solid #7AB8BF; /* Cor da borda dos campos */
      }
      .form-control:focus {
        border-color: #3F858C; /* Cor da borda ao focar */
        box-shadow: 0 0 5px rgba(63, 133, 140, 0.5); /* Sombra ao focar */
      }
      .btn-register-animal {
        background-color: #A67458; /* Cor do botão */
        border: none;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        color: #FFFFFF;
        font-size: 16px;
        margin-top: 20px;
      }
      .btn-register-animal:hover {
        background-color: #7AB8BF; /* Cor do botão ao passar o mouse */
      }
    </style>
  </head>
  <body>
    <!-- Cabeçalho -->
    <div class="register-animal-header">
      <h1>Registrar Novo Animal</h1>
    </div>

    <!-- Formulário de Registro -->
    <div class="container">
      <div class="register-animal-container">
        <form>
          <div class="mb-3">
            <label for="animal-name" class="form-label">Nome do Animal</label>
            <input type="text" class="form-control" id="animal-name" placeholder="Digite o nome do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-species" class="form-label">Espécie</label>
            <select class="form-control" id="animal-species" required>
              <option value="">Selecione a espécie</option>
              <option value="cachorro">Cachorro</option>
              <option value="gato">Gato</option>
              <option value="coelho">Coelho</option>
              <option value="outro">Outro</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="animal-age" class="form-label">Idade</label>
            <input type="number" class="form-control" id="animal-age" placeholder="Digite a idade do animal" required>
          </div>
          <div class="mb-3">
            <label for="animal-size" class="form-label">Porte</label>
            <select class="form-control" id="animal-size" required>
              <option value="">Selecione o porte</option>
              <option value="pequeno">Pequeno</option>
              <option value="medio">Médio</option>
              <option value="grande">Grande</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="animal-description" class="form-label">Descrição</label>
            <textarea class="form-control" id="animal-description" rows="4" placeholder="Descreva o animal (temperamento, saúde, etc.)" required></textarea>
          </div>
          <div class="mb-3">
            <label for="animal-photo" class="form-label">Foto do Animal</label>
            <input type="file" class="form-control" id="animal-photo" accept="image/*" required>
          </div>
          <button type="submit" class="btn btn-register-animal">Registrar Animal</button>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>