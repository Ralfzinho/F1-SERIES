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
  <link href='../assets/css/conta.css' rel="stylesheet">
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
            <a class="nav-link text-white" href="#">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/pages/conta.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="main-login">
    <div class="esquerda-login">
      <h1>Faça login <br> Na Plataforma</h1>
      <img src="../assets/img/tela_login.jpg" class="image-esquerda" alt="Piloto">
    </div>
    <div class="direita-login">
      <div class="card-login">
        <h1>login</h1>
        <div class="textfield">
          <label for="usuario">Usuário</label>
          <input type="text" name="usuario" placeholder="Usuário">
        </div>
        <div class="textfield">
          <label for="senha">Senha</label>
          <input type="password" name="senha" placeholder="Senha">
        </div>
        <div class="textfield">
          <label>
            <input type="checkbox"> Lembrar de mim
          </label>
        </div>
        <button class="btn-login">Login</button>
      </div>
    </div>
  </div>
</body>

</html>