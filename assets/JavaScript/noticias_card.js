
function adicionarNoticia({titulo, imagem, subtitulo, data, texto, link}) {
    const container = document.getElementById("noticias-container");
    
    const noticiaHTML = `
    <div class="col-md-6">
      <div class="card text-dark">
        <img src=" ${imagem}" class="card-img-top" alt="${titulo}">
        <div class="card-body">
            <h5 class="card-title">${titulo}</h5> 
            <span class="badge bg-warning text-dark">${subtitulo}</span>
            <small class="text-muted ms-2">${data}</small>
            <p class="card-text mt-2">${texto}</p>
            <div class="d-flex justify-content-between">
            <a href="${link}" class="btn btn-outline-dark btn-sm">Leia Mais</a>
            <button class="btn btn-outline-dark btn-sm"><i class="bi bi-share"></i></button>
          </div>
        </div>
      </div>
    </div>
  `;
    container.insertAdjacentHTML("beforeend", noticiaHTML)
}