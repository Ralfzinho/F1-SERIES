<?php
session_start();

require_once dirname(__DIR__) . '/includes/funcoes.php';

// constante para facilitar includes deste arquivo (que está em /pages)
define('INC', dirname(__DIR__) . '/includes/');

$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['usuario'] ?? '');
  $senha = $_POST['senha'] ?? '';

  if ($email === '' || $senha === '') {
    $erro = 'Preencha usuário e senha.';
  } elseif (auth_login($email, $senha)) {
    // Redireciona conforme papel
    if (auth_is('admin')) {
      header('Location: ../../F1-SERIES/admin/dashboard.php');
      exit;
    } elseif (auth_is('editor')) {
      header('Location: ../../F1-SERIES//editor/dashboard.php');
      exit;
    } else {
      header('Location: ../../F1-SERIES/aa/index.php');
      exit;
    }
  } else {
    $erro = 'Usuário ou senha inválidos.';
  }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
  <?php require_once INC . 'layout_head.php'; ?>
</head>
<body class="flex flex-col min-h-screen bg-neutral-50 text-neutral-900">

  <!-- Header -->
  <?php require_once INC . 'layout_nav.php'; ?>

  <!-- Área principal -->
  <main class="flex-1 flex flex-col md:flex-row">
    <!-- Lado esquerdo -->
    <div class="md:w-1/2 flex flex-col justify-center items-center bg-gradient-to-b from-red-900 via-dark to-black text-white p-8">
      <h1 class="text-3xl md:text-4xl font-bold mb-6">Faça login <br> na Plataforma</h1>
      <img src="../assets/img/tela_login.jpg" alt="Piloto" class="rounded-lg shadow-lg max-w-sm">
    </div>

    <!-- Lado direito -->
    <div class="md:w-1/2 flex justify-center items-center bg-white p-8">
      <div class="w-full max-w-sm bg-white border rounded-2xl shadow p-6">
        <h1 class="text-2xl font-bold text-center mb-6">Login</h1>

        <?php if (!empty($erro)): ?>
          <div class="mb-4 rounded-lg border border-red-200 bg-red-50 text-red-800 px-3 py-2 text-sm">
            <?= htmlspecialchars($erro) ?>
          </div>
        <?php endif; ?>

        <form action="" method="post" class="space-y-4">
          <div>
            <label for="usuario" class="block text-sm font-medium">Usuário (email)</label>
            <input
              type="text"
              name="usuario"
              id="usuario"
              placeholder="admin@rfg.local"
              value="<?= htmlspecialchars($_POST['usuario'] ?? '') ?>"
              class="mt-1 w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
            >
          </div>
          <div>
            <label for="senha" class="block text-sm font-medium">Senha</label>
            <input
              type="password"
              name="senha"
              id="senha"
              placeholder="Senha"
              class="mt-1 w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
            >
          </div>
          <div class="flex items-center">
            <input id="lembrar" type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
            <label for="lembrar" class="ml-2 text-sm">Lembrar de mim</label>
          </div>
          <button
            type="submit"
            class="w-full py-2.5 rounded-lg bg-primary text-white font-semibold hover:bg-red-700 transition"
          >
            Login
          </button>
        </form>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php require_once INC . 'layout_footer.php'; ?>

</body>
</html>
