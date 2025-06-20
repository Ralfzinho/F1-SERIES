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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='../F1-SERIES/assets/css/main.css' rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <header class="bg-dark text-white py-3">
    <nav class="navbar navbar-expand-lg navbar-dark container">
      <a class="navbar-brand fw-bold fs-4" href="#">F1 Series</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav gap-2">
          <li class="nav-item">
            <a class="nav-link text-white" href="../index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Calendário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Temporada</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../F1-SERIES/pages/sobre_nos.php">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../F1-SERIES/pages/conta.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
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
<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <p class="mb-2">Junte-se à comunidade F1 Series</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="#" class="text-white text-decoration-none">Instagram</a>
      <a href="#" class="text-white text-decoration-none">Twitter</a>
      <a href="#" class="text-white text-decoration-none">YouTube</a>
    </div>
    <p class="mt-3 small">© 2025 F1 Series - Todos os direitos reservados</p>
  </div>
</footer>

<!-- Bootstrap JS (Optional for Carousel functionality) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="assets/JavaScript/noticias_card.js"></script>
<script src="assets/JavaScript/tabela_class.js"></script>

</html>