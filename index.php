<?php
session_start();
define('INC', __DIR__ . '/includes/');
?>
<!doctype html>
<html lang="pt-br">
<?php require INC . 'layout_head.php'; ?>

<body class="bg-neutral-50 text-neutral-900 antialiased">

  <!-- Header -->
  <?php require INC . 'layout_nav.php'; ?>
  <main>
    <!-- Hero -->
    <section class="relative text-white ">
      <!-- overlay gradiente (dourado → preto) -->
      <div class="absolute inset-0 bg-gradient-to-r from-[#C9A300]/90 via-neutral-900/90 to-black"></div>

      <!-- conteúdo -->
      <div class="relative mx-auto max-w-7xl px-6 py-16">
        <div class="grid items-center gap-10 md:grid-cols-2">
          <!-- copy -->
          <div class="space-y-6">
            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs uppercase tracking-wider ring-1 ring-white/20 backdrop-blur">
              <span class="h-1.5 w-1.5 rounded-full bg-[#C9A300]"></span>
              Temporada 2025
            </span>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-[1.05]">
              Adrenalina em cada <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#C9A300] to-yellow-300">curva</span>.
            </h1>

            <p class="text-white/80 text-lg">
              A Corrida para a Glória. Um campeonato. Vários rivais.
            </p>

            <div class="flex flex-wrap gap-3 pt-2">
              <a href="#"
                class="px-5 py-2.5 rounded-xl text-black bg-[#C9A300] hover:bg-[#E6C200] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#C9A300]/60 transition">
                Ver temporada
              </a>
              <a href="#"
                class="px-5 py-2.5 rounded-xl border border-white/20 hover:bg-white/10 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white/40 transition">
                Calendário
              </a>
            </div>
          </div>

          <!-- vídeo -->
          <div class="rounded-3xl overflow-hidden ring-1 ring-white/10 shadow-2xl bg-white/5 backdrop-blur-md">
            <video
              class="block w-full aspect-video"
              poster="/F1-SERIES/assets/img/background_video.png"
              autoplay muted loop playsinline preload="metadata">
              <source src="/F1-SERIES/assets/img/videobackground.mp4" type="video/mp4" />
              Seu navegador não suporta vídeo HTML5.
            </video>
          </div>
        </div>
      </div>

      <!-- borda decorativa inferior -->
      <div class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    </section>

    <!-- ===== SECTION 2 – HISTÓRIA / GRID ===== -->
    <section id="historia" class="relative min-h-[101vh] py-20 md:py-28 bg-neutral-900 overflow-hidden">
      <div class="absolute inset-0 -z-0">
        <img src="assets/img/background_historia_1.jpg" class="w-full h-full object-cover" alt="Fundo veloz" />
      </div>
      <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/60 via-black/70 to-black/80"></div>

      <div class="relative z-20 max-w-7xl mx-auto px-6">
        <h2 class="text-center text-4xl md:text-6xl font-extrabold tracking-tight">
          <span class="text-white">RACE FOR</span> <span class="text-[#C9A300]">GLORY</span><span class="text-white">—</span> <span class="text-[#C9A300]">Nossa história</span>
        </h2>
        <p class="mt-6 text-center text-white/80 max-w-3xl mx-auto">
          Em 23 de novembro de 2021, um grupo de amigos se conectou no lobby de corridas. O que começou como diversão casual virou uma equipe unida por um mesmo sonho: competir e vencer.
        </p>

        <div class="mt-16 grid gap-10 md:gap-14 md:grid-cols-2">
          <!-- card -->
          <article class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-lg hover:bg-white/[0.07] transition">
            <h3 class="text-3xl md:text-4xl font-extrabold text-[#C9A300] uppercase tracking-wide">O nome e o símbolo</h3>
            <p class="mt-4 text-white/90 leading-relaxed">
              O nome RACE FOR GLORY representa liderança, pioneirismo e excelência — sempre à frente. Nosso símbolo, o lobo, traduz a força da coletividade: como uma alcateia, somos mais fortes juntos.
            </p>
          </article>

          <article class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-lg hover:bg-white/[0.07] transition">
            <h3 class="text-3xl md:text-4xl font-extrabold text-[#C9A300] uppercase tracking-wide">Trajetória de sucesso</h3>
            <p class="mt-4 text-white/90 leading-relaxed">
              Em poucos anos, nos consolidamos como uma das equipes mais respeitadas no automobilismo virtual, acumulando títulos e expandindo para novas plataformas e desafios.
            </p>
          </article>

          <article class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-lg hover:bg-white/[0.07] transition">
            <h3 class="text-3xl md:text-4xl font-extrabold text-[#C9A300] uppercase tracking-wide">Além das pistas</h3>
            <p class="mt-4 text-white/90 leading-relaxed">
              Compartilhamos bastidores, evolução dos pilotos e nossa preparação estratégica. O trabalho em equipe é o que nos torna únicos.
            </p>
          </article>

          <article class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-lg hover:bg-white/[0.07] transition">
            <h3 class="text-3xl md:text-4xl font-extrabold text-[#C9A300] uppercase tracking-wide">O futuro é veloz</h3>
            <p class="mt-4 text-white/90 leading-relaxed">
              Estamos sempre em movimento, buscando talentos, parcerias e conquistas. O próximo pódio é só o começo.
            </p>
          </article>
        </div>
      </div>
    </section>

    <!-- ===== SECTION 3 – INSTAGRAM / CALL ===== -->
    <section id="instagram" class="relative py-20 md:py-24 bg-white text-black">
      <div class="max-w-7xl mx-auto px-6 grid items-center gap-12 lg:grid-cols-3">
        <!-- ESQUERDA -->
        <div class="order-2 lg:order-1 lg:text-left text-center">
          <p class="text-5xl md:text-6xl leading-none font-extrabold">
            SIGA A <span class="text-[#C9A300]">RACE FOR GLORY</span><br class="hidden lg:block"> NO INSTAGRAM
          </p>
          <a href="https://instagram.com/MYTHS_STREET_team" target="_blank"
            class="mt-6 inline-block rounded-lg px-4 py-2 bg-black text-white hover:bg-neutral-800 transition">
            @raceforgloryof
          </a>
          <p class="mt-2 text-black/70 font-semibold tracking-wide">#RACE FOR GLORY</p>
        </div>

        <!-- IMAGEM AO CENTRO -->
        <div class="order-1 lg:order-2 justify-self-center">
          <img src="/F1-SERIES/assets/img/mockup_instagram.png" alt="Mockup Instagram"
            class="w-[300px] md:w-[420px] rotate-[-8deg] rounded-3xl" loading="lazy" />
        </div>

        <!-- DIREITA -->
        <div class="order-3 lg:order-3 lg:text-right text-center">
          <p class="mt-8 text-xl md:text-2xl font-semibold">
            FIQUE POR DENTRO DE TODAS AS <span class="text-[#C9A300]">NOVIDADES</span>
          </p>
          <p class="mt-2 text-black/70">Novos posts, bastidores e clipes toda semana.</p>
        </div>
      </div>
    </section>

    <section class="py-12 bg-neutral-50">
      <div class="max-w-7xl mx-auto px-6">
        <h2 class="mb-8 text-center text-3xl md:text-4xl font-extrabold tracking-tight">Destaques</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <!-- Card 1 -->
          <article class="group bg-white rounded-2xl border border-neutral-200 shadow-sm overflow-hidden hover:shadow-md transition">
            <div class="w-full aspect-[16/9] bg-white ring-neutral-200">
              <img src="/F1-SERIES/assets/img/tela_login.jpg" alt="Última Corrida"
                class="w-full h-full object-contain" />
            </div>
            <div class="p-5 text-left">
              <h5 class="text-lg font-semibold">Última Corrida</h5>
              <p class="mt-1 text-neutral-600">GP da Espanha — Vitória de O. Piastri com volta mais rápida.</p>
            </div>
          </article>

          <!-- Card 2 -->
          <article class="group bg-white rounded-2xl border border-neutral-200 shadow-sm overflow-hidden hover:shadow-md transition">
            <div class="w-full aspect-[16/9] bg-white ring-neutral-200">
              <img src="/F1-SERIES/assets/img/tela_login.jpg" alt="Piloto do Mês"
                class="w-full h-full object-contain" />
            </div>
            <div class="p-5 text-left">
              <h5 class="text-lg font-semibold">Piloto do Mês</h5>
              <p class="mt-1 text-neutral-600">Carlos R. (Red Phoenix) — Consistência e duas vitórias seguidas.</p>
            </div>
          </article>

          <!-- Card 3 -->
          <article class="group bg-white rounded-2xl border border-neutral-200 shadow-sm overflow-hidden hover:shadow-md transition">
            <div class="w-full aspect-[16/9] bg-white ring-neutral-200">
              <img src="/F1-SERIES/assets/img/tela_login.jpg" alt="Equipe Líder"
                class="w-full h-full object-contain" />
            </div>
            <div class="p-5 text-left">
              <h5 class="text-lg font-semibold">Equipe Líder</h5>
              <p class="mt-1 text-neutral-600">Black Arrow GP — 213 pontos acumulados na temporada.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <?php require INC . 'layout_footer.php'; ?>
  </main>
  <!-- Scripts -->
  <script src="/F1-SERIES/assets/JavaScript/noticias_card_tailwind.js"></script>
  <script src="/F1-SERIES/assets/JavaScript/classificacao_tailwind.js"></script>
</body>

</html>