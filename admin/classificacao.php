<?php
// admin/classificacao.php
session_start();
require_once dirname(__DIR__) . '/includes/funcoes.php';
auth_require_role(['admin','editor']);

define('INC', dirname(__DIR__) . '/includes/');
$title = 'Classificação — RFG';

// base mock na sessão
$_SESSION['mock_classificacao'] ??= [
  // exemplo inicial (pode apagar)
  ['equipe' => 'McLaren Racing',        'pontos' => 111, 'logo' => 'https://logo.clearbit.com/mclaren.com'],
  ['equipe' => 'Mercedes AMG Motorsport','pontos' => 75, 'logo' => 'https://logo.clearbit.com/mercedes-amg.com'],
  ['equipe' => 'Red Bull Racing',       'pontos' => 62,  'logo' => 'https://logo.clearbit.com/redbullracing.com'],
  ['equipe' => 'Ferrari',               'pontos' => 62,  'logo' => 'https://logo.clearbit.com/ferrari.com'],
];

$ok = ''; $erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $eq = $_POST['equipe'] ?? [];
  $pt = $_POST['pontos'] ?? [];
  $lg = $_POST['logo']   ?? [];

  $rows = [];
  for ($i = 0; $i < count($eq); $i++) {
    $nome  = trim($eq[$i] ?? '');
    $pontos= (int)($pt[$i] ?? 0);
    $logo  = trim($lg[$i] ?? '');
    if ($nome === '') continue; // ignora linhas vazias
    $rows[] = ['equipe' => $nome, 'pontos' => $pontos, 'logo' => $logo];
  }

  if (empty($rows)) {
    $erro = 'Informe ao menos uma equipe.';
  } else {
    // ordena por pontos desc e salva no mock
    usort($rows, fn($a,$b) => $b['pontos'] <=> $a['pontos']);
    $_SESSION['mock_classificacao'] = $rows;
    $ok = 'Classificação salva (mock).';

    /* ===== FUTURO (PDO/MySQL)
    require_once dirname(__DIR__) . '/includes/db.php';
    $pdo->beginTransaction();
    $pdo->exec("DELETE FROM classificacao_equipes"); // se for geral/temporada única
    $ins = $pdo->prepare("INSERT INTO classificacao_equipes (equipe, pontos, logo_url) VALUES (?,?,?)");
    foreach ($rows as $r) { $ins->execute([$r['equipe'], $r['pontos'], $r['logo']]); }
    $pdo->commit();
    $ok = 'Classificação salva no banco.';
    */
  }
}

$items = $_SESSION['mock_classificacao'];
?>
<!doctype html>
<html lang="pt-br">
<head><?php require INC . 'layout_head.php'; ?></head>
<body class="bg-neutral-50 text-neutral-900">
<?php require INC . 'layout_nav.php'; ?>

<main class="mx-auto max-w-6xl px-4 py-8">
  <div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">Classificação de Equipes</h1>
    <a href="/admin/dashboard.php" class="px-4 py-2 rounded border">Voltar</a>
  </div>

  <?php if ($ok): ?>
    <div class="mb-4 rounded-lg border border-green-200 bg-green-50 text-green-800 px-3 py-2 text-sm"><?= htmlspecialchars($ok) ?></div>
  <?php endif; ?>
  <?php if ($erro): ?>
    <div class="mb-4 rounded-lg border border-red-200 bg-red-50 text-red-800 px-3 py-2 text-sm"><?= htmlspecialchars($erro) ?></div>
  <?php endif; ?>

  <!-- Formulário de edição -->
  <form method="post" class="bg-white border rounded-2xl shadow p-6 mb-8 overflow-x-auto">
    <table class="min-w-full text-sm">
      <thead>
        <tr class="text-left border-b bg-neutral-50">
          <th class="py-2 pr-3">Equipe</th>
          <th class="py-2 pr-3">Pontos</th>
          <th class="py-2 pr-3">Logo (URL)</th>
        </tr>
      </thead>
      <tbody id="tbody">
        <?php
          $linhas = max(count($items), 6); // mostra pelo menos 6 linhas
          for ($i=0; $i<$linhas; $i++):
            $e = $items[$i]['equipe'] ?? '';
            $p = $items[$i]['pontos'] ?? '';
            $l = $items[$i]['logo']   ?? '';
        ?>
          <tr class="border-b">
            <td class="py-1 pr-3">
              <input name="equipe[]" class="w-full rounded border px-2 py-1" value="<?= htmlspecialchars($e) ?>" placeholder="Nome da equipe">
            </td>
            <td class="py-1 pr-3 w-28">
              <input name="pontos[]" type="number" class="w-24 rounded border px-2 py-1" value="<?= htmlspecialchars($p) ?>">
            </td>
            <td class="py-1 pr-3">
              <input name="logo[]" class="w-full rounded border px-2 py-1" value="<?= htmlspecialchars($l) ?>" placeholder="https://logo.clearbit.com/...">
            </td>
          </tr>
        <?php endfor; ?>
      </tbody>
    </table>

    <div class="flex justify-between mt-4">
      <button type="button" id="addRow" class="px-4 py-2 rounded border">+ Linha</button>
      <button class="px-5 py-2 rounded bg-primary text-white hover:bg-red-700">Salvar</button>
    </div>
  </form>

  <!-- Preview no estilo do index -->
  <section class="bg-white border rounded-2xl shadow p-4 md:p-6">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-semibold tracking-wide">CLASSIFICAÇÃO</h2>
      <a class="px-3 py-1.5 rounded border hover:bg-neutral-50" href="#">VER COMPLETA</a>
    </div>

    <ul class="divide-y">
      <?php foreach ($items as $i => $row): ?>
        <li class="flex items-center justify-between py-3 px-2 <?= $i===0 ? 'bg-green-50 rounded-lg' : '' ?>">
          <div class="flex items-center gap-3 min-w-0">
            <span class="w-6 shrink-0 text-neutral-500"><?= $i+1 ?></span>
            <img src="<?= htmlspecialchars($row['logo'] ?: 'https://placehold.co/40x40') ?>"
                 alt=""
                 class="w-9 h-9 rounded-full object-cover shrink-0">
            <span class="font-medium truncate"><?= htmlspecialchars($row['equipe']) ?></span>
          </div>
          <span class="font-semibold text-green-600 whitespace-nowrap"><?= (int)$row['pontos'] ?> pts</span>
        </li>
      <?php endforeach; ?>
      <?php if (empty($items)): ?>
        <li class="py-6 text-center text-neutral-500">Sem dados de classificação.</li>
      <?php endif; ?>
    </ul>
  </section>
</main>

<?php require INC . 'layout_footer.php'; ?>

<script>
document.getElementById('addRow')?.addEventListener('click', () => {
  const tr = document.createElement('tr');
  tr.className = 'border-b';
  tr.innerHTML = `
    <td class="py-1 pr-3"><input name="equipe[]" class="w-full rounded border px-2 py-1" placeholder="Nome da equipe"></td>
    <td class="py-1 pr-3 w-28"><input name="pontos[]" type="number" class="w-24 rounded border px-2 py-1" value="0"></td>
    <td class="py-1 pr-3"><input name="logo[]" class="w-full rounded border px-2 py-1" placeholder="https://logo.clearbit.com/..."></td>
  `;
  document.getElementById('tbody').appendChild(tr);
});
</script>
</body>
</html>
