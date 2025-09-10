<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>RACE FOR GLORY - Início</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { dark: '#0b0b0c', primary: '#ef4444' }
        }
      }
    }
  </script>

  <!-- Seu CSS opcional -->
  <link href="../F1-SERIES/assets/css/main.css" rel="stylesheet">
</head>
<body class="bg-neutral-50 text-neutral-900">

  <!-- Header -->
  <header class="bg-dark text-white">
    <nav class="mx-auto max-w-6xl px-4 py-3 flex items-center justify-between">
      <a class="font-bold text-xl tracking-wide" href="#">RACE FOR GLORY</a>

      <!-- mobile -->
      <button id="menuBtn" class="md:hidden" aria-label="Abrir menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>

      <ul id="menu" class="hidden md:flex gap-6 items-center">
        <li><a class="text-white/90 hover:text-white" href="../index.php">Início</a></li>
        <li><a class="text-white/90 hover:text-white" href="#">Calendário</a></li>
        <li><a class="text-white/90 hover:text-white" href="#">Temporada</a></li>
        <li><a class="text-white/90 hover:text-white" href="../F1-SERIES/pages/sobre_nos.php">Contato</a></li>
        <li><a class="inline-flex items-center px-3 py-1.5 rounded border border-white/20 hover:border-white" href="../F1-SERIES/pages/conta.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="relative text-white">
    <!-- overlay gradiente -->
    <div class="absolute inset-0 bg-gradient-to-r from-red-900/90 via-dark/90 to-black"></div>

    <!-- conteúdo -->
    <div class="relative mx-auto max-w-6xl px-4 py-12 grid md:grid-cols-2 gap-8 items-center">
      <div>
        <h1 class="text-3xl md:text-5xl font-extrabold leading-tight">Adrenalina em cada curva.</h1>
        <p class="mt-3 text-white/80">Uma temporada. Um campeão. Vários rivais.</p>
        <div class="mt-6 flex gap-3">
          <a href="#" class="px-5 py-2.5 rounded-lg bg-primary text-white">Ver temporada</a>
          <a href="#" class="px-5 py-2.5 rounded-lg border border-white/20">Calendário</a>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden ring-1 ring-white/10">
        <img class="w-full h-64 md:h-80 object-cover"
             src="https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png"
             alt="Racing banner">
      </div>
    </div>
  </section>

  <!-- Conteúdo -->
  <main class="mx-auto max-w-6xl px-4 py-10 grid lg:grid-cols-3 gap-10">
    <!-- Coluna: Notícias -->
    <section class="lg:col-span-2">
      <h5 class="text-lg font-semibold border-l-4 pl-3 border-emerald-600 mb-4">ÚLTIMAS CORRIDAS</h5>
      <div id="noticias-container" class="grid md:grid-cols-2 gap-6"></div>
    </section>

    <!-- Coluna: Lateral -->
    <aside class="space-y-6">
      <!-- Último vencedor -->
      <div class="bg-white p-4 rounded-2xl border shadow-sm">
        <h5 class="text-lg font-semibold border-l-4 pl-3 border-emerald-600 mb-3">ÚLTIMO VENCEDOR</h5>
        <div class="flex items-center justify-between">
          <div>
            <p class="font-semibold">O. Piastri
              <span class="ml-2 text-xs px-2 py-0.5 rounded bg-green-600 text-white">WIN</span>
            </p>
            <p class="text-sm text-neutral-600">McLaren</p>
          </div>
        </div>
        <p class="mt-3 text-xs text-neutral-500">Grande Prêmio da Espanha • 01 de Junho, 2025</p>
      </div>

      <!-- Destaques -->
      <div class="bg-white p-4 rounded-2xl border shadow-sm">
        <h5 class="text-lg font-semibold border-l-4 pl-3 border-emerald-600 mb-3">EM DESTAQUE</h5>
        <a href="#" class="flex items-center gap-3 py-2 hover:bg-neutral-50 rounded-lg px-2">
          <img src="https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png" class="w-20 h-14 object-cover rounded-lg" alt="">
          <div>
            <strong class="block">Punições deixam pilotos com raiva</strong>
            <small class="text-neutral-500">01 de junho, 2025</small>
          </div>
        </a>
      </div>

      <!-- Classificação -->
      <div class="bg-white rounded-2xl border shadow-sm p-4">
        <div class="flex items-center justify-between mb-3">
          <h5 class="text-lg font-semibold border-l-4 pl-3 border-emerald-600 m-0">CLASSIFICAÇÃO</h5>
          <a href="#" class="text-sm px-3 py-1.5 rounded border hover:bg-neutral-50">VER COMPLETA</a>
        </div>
        <div id="classificacao-list" class="divide-y"></div>
      </div>
    </aside>
  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-8">
    <div class="mx-auto max-w-6xl px-4">
      <p class="mb-2">Junte-se à comunidade RACE FOR GLORY</p>
      <div class="flex justify-center gap-6 text-white/90">
        <a href="#" class="hover:text-white">Instagram</a>
        <a href="#" class="hover:text-white">Twitter</a>
        <a href="#" class="hover:text-white">YouTube</a>
      </div>
      <p class="mt-6 text-sm text-white/60">© 2025 RACE FOR GLORY - Todos os direitos reservados</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="assets/JavaScript/noticias_card_tailwind.js"></script>
  <script src="assets/JavaScript/classificacao_tailwind.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      adicionarNoticiasEmLote([
        {
          titulo: "Ferrari surpreende na classificação",
          imagem: "https://via.placeholder.com/1200x600?text=Ferrari",
          subtitulo: "QUALI",
          data: "25 Mai 2025",
          texto: "Pole inesperada com volta perfeita no Q3.",
          link: "#"
        },
        {
          titulo: "Mercedes evolui pacote aerodinâmico",
          imagem: "https://via.placeholder.com/1200x600?text=Mercedes",
          subtitulo: "ATUALIZAÇÕES",
          data: "18 Mai 2025",
          texto: "Carro ganha estabilidade em curvas de alta.",
          link: "#"
        }
      ]);

      renderClassificacaoTailwind([
        { equipe: "McLaren Racing",  pontos: 111, logo: "https://logo.clearbit.com/mclaren.com" },
        { equipe: "Mercedes AMG",    pontos: 75,  logo: "https://logo.clearbit.com/mercedesamgf1.com" },
        { equipe: "Red Bull Racing", pontos: 62,  logo: "https://logo.clearbit.com/redbullracing.com" },
        { equipe: "Ferrari",         pontos: 62,  logo: "https://logo.clearbit.com/ferrari.com" }
      ]);
    });
  </script>
</body>
</html>
