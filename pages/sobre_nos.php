<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>F1 Series - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href='../assets/css/main.css' rel="stylesheet">
</head>

<body>
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
            <a class="nav-link text-white" href="/pages/sobre_nos.php">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/pages/conta.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Conteúdo da página -->
  <main class="container">
    <section class="mb-5">
      <h2 class="text-danger">O que é a F1 Series?</h2>
      <p class="lead">A F1 Series é um campeonato de automobilismo virtual inspirado na Fórmula 1, disputado por jogadores controlando equipes em corridas simuladas. Aqui, você pode montar         sua escuderia, competir por títulos e fazer parte da elite do automobilismo digital.</p>
    </section>

    <section class="mb-5">
      <h3 class="text-danger">📋 Regras Gerais</h3>
      <ul>
        <li>10 equipes e 20 pilotos por temporada</li>
        <li>Corridas simuladas semanalmente</li>
        <li>Transferências e finanças ativas entre etapas</li>
      </ul>
    </section>

    <section class="mb-5">
      <h3 class="text-danger">🏆 Pontuação</h3>
      <p>As posições valem pontos conforme o padrão oficial:</p>
      <table class="table table-bordered w-50">
        <thead class="table-dark">
          <tr>
            <th>Posição</th>
            <th>Pontos</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>1º</td><td>25</td></tr>
          <tr><td>2º</td><td>18</td></tr>
          <tr><td>3º</td><td>15</td></tr>
          <tr><td>...</td><td>...</td></tr>
          <tr><td>10º</td><td>1</td></tr>
        </tbody>
      </table>
    </section>

    <section class="mb-5">
      <h3 class="text-danger">💼 Como Participar</h3>
      <p>Interessado em correr? Entre em contato com a organização para garantir sua vaga. Você pode ser piloto ou gestor de equipe!</p>
    </section>

    <section class="mb-5">
      <h3 class="text-danger">📨 Contato</h3>
      <p>Para mais informações, entre em contato através do e-mail <strong>f1series@campeonato.com</strong> ou fale com os admins via Discord.</p>
    </section>
  </main>

  <!-- Rodapé -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; <?= date("Y"); ?> F1 Series. Todos os direitos reservados.
  </footer>
</body>
</html>
