function adicionarLinhaClassificacao(posicao, logoURL, nomeEquipe, pontos){
    const tabela = document.getElementById("tabela-classificacao");
    if (!tabela) return;
    const linha = `
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <strong class="me-2">${posicao}</strong>
          <img src="${logoURL}" alt="${nomeEquipe}" width="30" class="me-2">
          <div>
            <strong>${nomeEquipe}</strong><br>
          </div>
        </div>
      </td>
      <td class="text-center">${pontos}</td>
    </tr>
    `;
    tabela.insertAdjacentHTML("beforeend",linha);
}

document.addEventListener("DOMContentLoaded", () => {
  const classificacao = [
    { posicao: 1, nome: "McLaren Racing", pontos: 111, logo: "https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png" },
    { posicao: 2, nome: "Mercedes AMG Motorsport", pontos: 75, logo: "https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png" },
    { posicao: 3, nome: "Red Bull Racing", pontos: 62, logo: "https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png" },
    { posicao: 4, nome: "Ferarri", pontos: 62, logo: "https://cdn.midjourney.com/912bcebb-a79d-4728-88b7-ef15a3ab771b/0_3.png" },
  ];

  classificacao.sort((a, b) => a.posicao - b.posicao);

  classificacao.forEach(time => {
    adicionarLinhaClassificacao(time.posicao, time.logo, time.nome, time.pontos);
  });
});