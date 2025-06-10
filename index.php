<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<!-- resto do HTML -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>F1 Series - Inicio</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .carousel-item {
      height: 60vh;
      /* Ajuste a altura do carrossel conforme necessário */
      max-height: 500px;
      /* Limita a altura máxima */
    }

    .carousel-inner {
      height: 100%;
    }

    .carousel-img {
      object-fit: cover;
      height: 100%;
      width: 100%;
    }

    /* Ajustar o texto da legenda */
    .carousel-caption {
      bottom: 10%;
      /* Ajuste a posição da legenda */
    }
  </style>
</head>

<body class="bg-light">
  <!-- Header -->
  <header class="bg-dark text-white py-4">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="text-xl font-bold">F1 Series</div>
      <nav>
        <ul class="d-flex list-unstyled mb-0">
          <li class="ms-4"><a href="#" class="text-white text-decoration-none hover:text-success">Inicio</a></li>
          <li class="ms-4"><a href="#" class="text-white text-decoration-none hover:text-success">Calendario</a></li>
          <li class="ms-4"><a href="#" class="text-white text-decoration-none hover:text-success">Temporada</a></li>
          <li class="ms-4"><a href="#" class="text-white text-decoration-none hover:text-success">Contato</a></li>
          <li class="ms-4"><a href="/F1-SERIES/pages/conta.php" class="text-white text-decoration-none hover:text-success">Fazer Login</a></li>
        </ul>
      </nav>
    </div>
    <div id="carouselExample" class="carousel slide w-100 mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item ">
          <img src="https://cdn.midjourney.com/466d114c-0fa5-4753-8c8a-2c532d80725a/0_3.png"
            class="carousel-img d-block w-100" alt="Slide 1" style="object-fit:cover; object-position: center 70%;">
          <div class="carousel-caption d-none d-md-block text-start" style="left: 25%; right: auto; bottom: 35%;">
            <p class="h3">Ultrapasse os limites. </p>
            <p class="h3">Vença com estilo.</p>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_2.png"
            class="carousel-img d-block w-100" alt="Slide 1" style="object-fit:cover; object-position: center 70%;">
          <div class="carousel-caption d-none d-md-block text-start" style="left: 25%; right: auto; bottom: 35%;">
            <p class="h3">Uma temporada.</p>
            <p class="h3">Um campeão. </p>
            <p class="h3">Vários rivais.</p>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item active">
          <img src="https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png"
            class="carousel-img d-block w-100" alt="Slide 1" style="object-fit:cover; object-position: center 70%;">
          <div class="carousel-caption d-none d-md-block text-start" style="left: 55%; right: auto; bottom: 35%;">
            <p class="h3">Adrenalina em cada curva.</p>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
  <div class="container my-5">
    <main class="container my-5">
      <div class="row">
        <!-- Coluna: Notícias Populares -->
        <div class="col-lg-8">
          <h5 class="border-start border-success ps-3 mb-4">ULTIMAS CORRIDAS</h5>
          <div id="noticias-container" class="row g-4">
            <!-- Replique outro SCRIPT para outra notícia -->
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                adicionarNoticia({
                  titulo: "Teste",
                  imagem: "https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png",
                  subtitulo: "TEMPORADA 1",
                  data: "07 de Junho, 2025",
                  texto: "Testando com sucesso...",
                  link: "#"
                });
              });
            </script>
          </div>
        </div>
        <!-- Coluna: Resultados e Spotlight -->
        <div class="col-lg-4">
          <!-- Últimos resultados -->
          <h5 class="border-start border-success ps-3 mb-4">ULTIMO VENCEDOR</h5>
          <div class="bg-white p-3 border rounded mb-4">
            <div class="d-flex justify-content-between text-dark">
              <div>
                <strong>O. Piastri</strong> <span class="badge bg-success">WIN</span> <br><small>McLaren</small>
              </div>
            </div>
            <hr>
            <small class="text-muted d-block mt-2">Grande Premio da Espanha / 01 de Junho, 2025</small>
          </div>

          <!-- DESTAQUE -->
          <h5 class="border-start border-success ps-3 mb-3">EM DESTAQUES</h5>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex">
                <img src="https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png" class="me-3"
                  style="width: 80px; height: 60px; object-fit: cover;">
                <div>
                  <strong>Punições deixam pilotos com raiva</strong><br>
                  <small class="text-muted">01 de junho, 2025</small>
                </div>
              </div>
            </a>
            <!-- Replique para outros destaques -->

            <!-- Tabela com CLASSIFICAÇÃO -->
            <div class="mt-4 mb-3 d-flex justify-content-between align-items-center">
              <h5 class="border-start border-success ps-3 mb-0">CLASSIFICAÇÃO</h5>
              <button class="btn btn-outline-secondary btn-sm">VER COMPLETA</button>
            </div>
            <div class="card mt-0 text-dark">
              <div class="table-responsive">
                <table class="table table-bordered mb-0">
                  <thead class="table bg-danger text-uppercase text-center">
                    <tr class="text-light">
                      <th>Posição da equipe</th>
                      <th>Pontos</th>
                    </tr>
                  </thead>
                  <tbody id="tabela-classificacao" class="align-middle">
                    <!-- Equipes no tabela_class.js -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>



</body>
<!-- Footer -->
<footer class="bg-dark text-light text-center py-4 mt-12">
  <p>&copy; 2020 F1 Series. Todos os direitos reservados.</p>
</footer>

<!-- Bootstrap JS (Optional for Carousel functionality) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="assets/JavaScript/noticias_card.js"></script>
<script src="assets/JavaScript/tabela_class.js"></script>

</html>