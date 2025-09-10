<?php $logged = isset($_SESSION['user']); ?>
<header class="bg-dark text-white">
  <nav class="mx-auto max-w-6xl px-4 py-3 flex items-center justify-between">
    <a href="/index.php" class="text-white font-bold text-xl tracking-wide">Racing for Glory</a>
    <button id="menuBtn" class="md:hidden text-white" aria-label="menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <ul id="menu" class="hidden md:flex gap-6 items-center">
      <li><a class="text-white/90 hover:text-white" href="/index.php">Início</a></li>
      <li><a class="text-white/90 hover:text-white" href="#">Calendário</a></li>
      <li><a class="text-white/90 hover:text-white" href="#">Temporada</a></li>
      <li><a class="text-white/90 hover:text-white" href="/pages/sobre_nos.php">Contato</a></li>
      <?php if ($logged): ?>
        <li><a class="inline-flex items-center px-3 py-1.5 rounded bg-primary text-white" href="/admin/dashboard.php">Painel</a></li>
        <li><a class="text-white/90 hover:text-white" href="/admin-login/logout.php">Sair</a></li>
      <?php else: ?>
        <li><a class="inline-flex items-center px-3 py-1.5 rounded border border-white/20 hover:border-white text-white" href="/admin-login/login.php">Login</a></li>
      <?php endif; ?>
    </ul>
  </nav>
</header>
<script>
  document.getElementById('menuBtn')?.addEventListener('click',()=> {
    const m = document.getElementById('menu'); m.classList.toggle('hidden');
    m.classList.toggle('flex');
    m.classList.toggle('flex-col');
    m.classList.add('bg-dark','text-white','p-4','mt-2','rounded','mx-4');
  });
</script>