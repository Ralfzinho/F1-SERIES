<?php
require_once __DIR__ . '/../pages/verifica_login.php';
$title='Painel — Racing for Glory';
include __DIR__.'/../includes/layout_head.php';
include __DIR__.'/../includes/layout_nav.php';
$user = $_SESSION['user'];
?>
<main class="mx-auto max-w-6xl px-4 py-8">
  <div class="mb-6">
    <h2 class="text-2xl font-semibold">Olá, <?= htmlspecialchars($user['name']) ?></h2>
    <p class="text-neutral-500">Painel em modo <b>mock</b> (sem banco de dados).</p>
  </div>

  <div class="grid md:grid-cols-3 gap-6">
    <a href="/piloto/dashboard.php" class="block rounded-2xl border bg-white p-6 shadow hover:shadow-md transition">
      <h3 class="font-semibold mb-2">Pilotos</h3>
      <p class="text-sm text-neutral-500">Gerenciar lista de pilotos (mock)</p>
    </a>
    <a href="/admin/classificacao.php" class="block rounded-2xl border bg-white p-6 shadow hover:shadow-md transition">
      <h3 class="font-semibold mb-2">Classificação</h3>
      <p class="text-sm text-neutral-500">Tabela por equipes/pilotos (mock)</p>
    </a>
    <a href="/pages/cadastro_piloto.php" class="block rounded-2xl border bg-white p-6 shadow hover:shadow-md transition">
      <h3 class="font-semibold mb-2">Cadastrar Piloto</h3>
      <p class="text-sm text-neutral-500">Formulário Tailwind</p>
    </a>
  </div>
</main>
<?php include __DIR__.'/../includes/layout_footer.php'; ?>
