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
  <style>
    body {
      background: linear-gradient(to right, #0f0f0f, #1c1c1c);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }

    .login-card {
      background-color: #141414;
      border-radius: 1rem;
      padding: 2.5rem;
      box-shadow: 0 0 30px rgba(255, 0, 0, 0.3);
      max-width: 420px;
      width: 100%;
    }

    .login-card h2 {
      margin-bottom: 1.5rem;
      font-weight: bold;
      text-align: center;
      color: #f44336;
    }

    .form-control {
      background-color: #1e1e1e;
      border: 1px solid #333;
      color: white;
    }

    .form-control:focus {
      background-color: #1e1e1e;
      border-color: #f44336;
      box-shadow: none;
      color: white;
    }

    .btn-f1 {
      background-color: #f44336;
      border: none;
      width: 100%;
    }

    .btn-f1:hover {
      background-color: #d32f2f;
    }

    .f1-logo {
      width: 80px;
      margin: 0 auto 1rem;
      display: block;
    }
  </style>
</head>

<body>
  <div class="login-card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/F1.svg" alt="F1 Logo" class="f1-logo">
    <h2>Área de Acesso</h2>
    <?php if (isset($_SESSION['erro_login'])): ?>
      <div class="alert alert-danger text-center">
        <?php echo $_SESSION['erro_login']; unset($_SESSION['erro_login']); ?>
      </div>
    <?php endif; ?>
    <form action="verifica_login.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
      </div>
      <button type="submit" class="btn btn-f1 mt-3">Entrar</button>
    </form>
  </div>
</body>

</html>
