<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal | Mercado Vila de Ouro</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php include 'estrutura/navbar.php'; ?>
    <div class="d-flex justify-content-center align-items-center mb-2">
        <div id="carouselExampleIndicators" class="carousel slide w-75 rounded-bottom border-4 border-yellow-200">
            <!-- Indicadores -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active bg-light" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    class="bg-light" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    class="bg-light" aria-label="Slide 3"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagem/carousel_mercado_1.png" class="d-block w-100" alt="Praça Riugi Kojima">
                    <div class="carousel-caption mb-2">
                        <h5 class="p-2 rounded-1" style="background-color: #0000007e; display: inline; color: white;">Ofertas desta semana</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagem/carousel_mercado_2.png" class="d-block w-100" alt="Parque da Cidade">
                    <div class="carousel-caption mb-2">
                        <h5 class="p-2 rounded-1" style="background-color: #0000007e; display: inline; color: white;">Ofertas desta semana</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagem/carousel_mercado_3.png" class="d-block w-100" alt="Vicentina Aranha">
                    <div class="carousel-caption mb-2">
                        <h5 class="p-2 rounded-1" style="background-color: #0000007e; display: inline; color: white;">Ofertas desta semana</h5>
                    </div>
                </div>
            </div>

            <!-- Controles -->
            <button class="carousel-control-prev ms-2" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <div class="bg-dark p-2" style="border-radius: 5px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </div>
            </button>
            <button class="carousel-control-next me-2" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <div class="bg-dark p-2" style="border-radius: 5px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </div>
            </button>
        </div>
    </div>
    <div class="bg-yellow-200 rounded-top-5 p-4">
        <div class="container">
            <div class="row my-2 g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <a href="#" onclick="event.preventDefault(); openImageModal('imagem/mercado_vila_ouro.png')">
                            <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="Bolacha Bono">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Bolacha Bono</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <div class="container">
                                <div class="row g-1">
                                    <div class="col-9">
                                        <a href="#" class="btn btn-warning border-dark border-2 text-dark flex justify-center mt-2 hover:underline">Saber mais</a>                                    
                                    </div>
                                    <div class="col-3">
                                        <button type="button" class="btn btn-dark border-warning border-2 mt-2" onclick="openImageModal('imagem/mercado_vila_ouro.png')">
                                            <i class="bi bi-arrows-fullscreen text-warning"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Desodorante Rexona</h5>
                            <p class="card-tex text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-warning border-dark text-dark flex justify-center mt-2 hover:underline">Saber mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Refrigerante Coca Cola</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-warning border-dark text-dark flex justify-center mt-2 hover:underline">Saber mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-2 g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Bolacha Bono</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-warning border-dark text-dark flex justify-center mt-2 hover:underline">Saber mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Desodorante Rexona</h5>
                            <p class="card-tex text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-warning border-dark text-dark flex justify-center mt-2 hover:underline">Saber mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Refrigerante Coca Cola</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-warning border-dark text-dark flex justify-center mt-2 hover:underline">Saber mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-2 g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Bolacha Bono</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-warning border-dark text-dark flex justify-center mt-2 hover:underline">Saber mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Desodorante Rexona</h5>
                            <p class="card-tex text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-warning border-dark text-dark flex justify-center mt-2 hover:underline">Saber mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition transform hover:bg-yellow-400 transition transform hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Refrigerante Coca Cola</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-warning border-dark text-dark flex justify-center mt-2 hover:underline">Saber mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0">
                <!-- Botão de fechar o modal -->
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <!-- A imagem será carregada aqui via JavaScript -->
                <img src="imagem/mercado_vila_ouro.png" class="img-fluid w-100" id="modalImageSource" alt="Imagem Ampliada">
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
    // Aplica o tema salvo ao carregar a página
    document.addEventListener("DOMContentLoaded", function () {
        const savedTheme = localStorage.getItem("theme");

        if (savedTheme) {
            document.documentElement.setAttribute("data-bs-theme", savedTheme);
        } else {
            // Se não tiver tema salvo, define "light" como padrão
            document.documentElement.setAttribute("data-bs-theme", "light");
        }
    });

    // Alterna entre light/dark e salva no localStorage
    function toggleTheme() {
        const current = document.documentElement.getAttribute("data-bs-theme");
        const newTheme = current === "dark" ? "light" : "dark";

        document.documentElement.setAttribute("data-bs-theme", newTheme);
        localStorage.setItem("theme", newTheme);
    }

    function openImageModal(imageSrc) {
            // 1. Encontra o elemento da imagem dentro do modal pelo ID
            var modalImage = document.getElementById('modalImageSource');
            
            // 2. Define o atributo 'src' da imagem com o caminho passado para a função
            modalImage.src = imageSrc;
            
            // 3. Cria uma instância do objeto Modal do Bootstrap
            var imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
            
            // 4. Abre o modal
            imageModal.show();
        }
</script>
</body>
</html>