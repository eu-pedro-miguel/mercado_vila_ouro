<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal | Mercado Vila de Ouro</title>
    <link rel="icon" type="image/png" href="imagem/mercado_vila_ouro_favicon.png">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'estrutura/navbar.php'; ?>
    <div class="d-flex justify-content-center align-items-center mb-4">
        <div id="carouselExampleIndicators" class="carousel slide w-100 mx-5 rounded-bottom border-4 border-top-0 border-yellow-200" style="height: 37rem;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active bg-light rounded-circle p-0" aria-current="true" aria-label="Slide 1" style="width: 10px; height: 10px;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    class="bg-light rounded-circle p-0" aria-label="Slide 2" style="width: 10px; height: 10px;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    class="bg-light rounded-circle p-0" aria-label="Slide 3" style="width: 10px; height: 10px;"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source media="(max-width: 798px)" srcset="imagem/bolacha_bono_mobile.png">
                        <img src="imagem/bolacha_bono.png" class="d-block w-100" alt="">
                    </picture>
                    <div class="carousel-caption mb-2 d-flex justify-content-center">
                        <h5 class="p-1 rounded-1 bg-black bg-opacity-50 border-0 text-white w-30">Bolacha Bono(Sabores)</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(max-width: 917px)" srcset="imagem/salgadinho_cheetos_mobile.png">
                        <img src="imagem/salgadinho_cheetos.png" class="d-block w-100" alt="">
                    </picture>

                    <div class="carousel-caption mb-2 d-flex justify-content-center">
                        <h5 class="p-1 rounded-1 bg-black bg-opacity-50 border-0 text-white w-30">Salgadinho Cheetos(Sabores)</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(max-width: 843px)" srcset="imagem/desodorante_rexona_mobile.png">
                        <img src="imagem/desodorante_rexona.png" class="d-block w-100" alt="">
                    </picture>

                    <div class="carousel-caption mb-2 d-flex justify-content-center">
                        <h5 class="p-1 rounded-1 bg-black bg-opacity-50 border-0 text-white w-30">Desodorante Rexona</h5>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev ms-2 my-auto" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <div class="bg-dark p-2" style="border-radius: 5px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </div>
            </button>
            <button class="carousel-control-next me-2 my-auto" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <div class="bg-dark p-2" style="border-radius: 5px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </div>
            </button>
        </div>
    </div>
    <div class="bg-yellow-200 rounded-top-5 p-4">
        <h1 class="text-dark fw-bold text-4xl mb-2 text-center">OFERTAS</h1>
        <div class="container">
            <div class="row mb-2 g-4">
                <div class="col-12 col-sm-4 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="..." style="height:105px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Bolacha Bono</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <div class="container">
                                <div class="row g-1 align-items-center">
                                    <div class="col-12 col-lg-9">
                                        <a href="#" class="btn btn-warning border-dark border-2 text-dark flex justify-center mt-2 hover:underline">Saber mais</a>                                    
                                    </div>
                                    <div class="col-lg-3 d-none d-lg-block text-end">
                                        <button type="button" class="btn btn-dark border-warning border-2 mt-2" onclick="openImageModal('imagem/mercado_vila_ouro.png')">
                                            <i class="bi bi-arrows-fullscreen text-warning"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="..." style="height:105px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Desodorante Rexona</h5>
                            <p class="card-tex text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <div class="container">
                                <div class="row g-1 align-items-center">
                                    <div class="col-12 col-lg-9">
                                        <a href="#" class="btn btn-warning border-dark border-2 text-dark flex justify-center mt-2 hover:underline">Saber mais</a>                                    
                                    </div>
                                    <div class="col-lg-3 d-none d-lg-block text-end">
                                        <button type="button" class="btn btn-dark border-warning border-2 mt-2" onclick="openImageModal('imagem/mercado_vila_ouro.png')">
                                            <i class="bi bi-arrows-fullscreen text-warning"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="..." style="height:105px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Refrigerante Coca Cola</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <div class="container">
                                <div class="row g-1 align-items-center">
                                    <div class="col-12 col-lg-9">
                                        <a href="#" class="btn btn-warning border-dark border-2 text-dark flex justify-center mt-2 hover:underline">Saber mais</a>                                    
                                    </div>
                                    <div class="col-lg-3 d-none d-lg-block text-end">
                                        <button type="button" class="btn btn-dark border-warning border-2 mt-2" onclick="openImageModal('imagem/mercado_vila_ouro.png')">
                                            <i class="bi bi-arrows-fullscreen text-warning"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-2 g-4">
                <div class="col-12 col-sm-4 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="..." style="height:105px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Bolacha Bono</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <div class="container">
                                <div class="row g-1 align-items-center">
                                    <div class="col-12 col-lg-9">
                                        <a href="#" class="btn btn-warning border-dark border-2 text-dark flex justify-center mt-2 hover:underline">Saber mais</a>                                    
                                    </div>
                                    <div class="col-lg-3 d-none d-lg-block text-end">
                                        <button type="button" class="btn btn-dark border-warning border-2 mt-2" onclick="openImageModal('imagem/mercado_vila_ouro.png')">
                                            <i class="bi bi-arrows-fullscreen text-warning"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="..." style="height:105px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Desodorante Rexona</h5>
                            <p class="card-tex text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <div class="container">
                                <div class="row g-1 align-items-center">
                                    <div class="col-12 col-lg-9">
                                        <a href="#" class="btn btn-warning border-dark border-2 text-dark flex justify-center mt-2 hover:underline">Saber mais</a>                                    
                                    </div>
                                    <div class="col-lg-3 d-none d-lg-block text-end">
                                        <button type="button" class="btn btn-dark border-warning border-2 mt-2" onclick="openImageModal('imagem/mercado_vila_ouro.png')">
                                            <i class="bi bi-arrows-fullscreen text-warning"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-4">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="..." style="height:105px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center text-2xl text-dark fw-bold line-clamp-1">Refrigerante Coca Cola</h5>
                            <p class="card-text text-dark line-clamp-2 small">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <div class="container">
                                <div class="row g-1 align-items-center">
                                    <div class="col-12 col-lg-9">
                                        <a href="#" class="btn btn-warning border-dark border-2 text-dark flex justify-center mt-2 hover:underline">Saber mais</a>                                    
                                    </div>
                                    <div class="col-lg-3 d-none d-lg-block text-end">
                                        <button type="button" class="btn btn-dark border-warning border-2 mt-2" onclick="openImageModal('imagem/mercado_vila_ouro.png')">
                                            <i class="bi bi-arrows-fullscreen text-warning"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-yellow-200 rounded-top-5 rounded-bottom-5 p-4 mt-5 mb-5 mx-5">
        <h1 class="text-dark fw-bold text-4xl text-center mb-2">ÚLTIMOS ENCARTES DE OFERTAS</h1>
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-1xl text-dark fw-bold line-clamp-1">Gostosuras</h5>
                            <p class="card-text text-dark text-xs line-clamp-2 small">01/11/2025</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btnDownload btn btn-sm btn-0 fw-bold border-dark border-2 bg-yellow-0 hover:bg-yellow-500 mt-2 d-flex align-items-center gap-2">
                                    <i class="bi bi-download text-dark"></i>
                                    <span class="text-dark text-center">Baixar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-1xl text-dark fw-bold line-clamp-1">Feirão</h5>
                            <p class="card-text text-dark text-xs line-clamp-2 small">08/11/2025</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btnDownload btn btn-sm btn-0 fw-bold border-dark border-2 bg-yellow-0 hover:bg-yellow-500 mt-2 d-flex align-items-center gap-2">
                                    <i class="bi bi-download text-dark"></i>
                                    <span class="text-dark text-center">Baixar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-1xl text-dark fw-bold line-clamp-1">Ofertão</h5>
                            <p class="card-text text-dark text-xs line-clamp-2 small">15/11/2025</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btnDownload btn btn-sm btn-0 fw-bold border-dark border-2 bg-yellow-0 hover:bg-yellow-500 mt-2 d-flex align-items-center gap-2">
                                    <i class="bi bi-download text-dark"></i>
                                    <span class="text-dark text-center">Baixar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-1xl text-dark fw-bold line-clamp-1">Natal</h5>
                            <p class="card-text text-dark text-xs line-clamp-2 small">22/11/2025</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btnDownload btn btn-sm btn-0 fw-bold border-dark border-2 bg-yellow-0 hover:bg-yellow-500 mt-2 d-flex align-items-center gap-2">
                                    <i class="bi bi-download text-dark"></i>
                                    <span class="text-dark text-center">Baixar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-1xl text-dark fw-bold line-clamp-1">Páscoa</h5>
                            <p class="card-text text-dark text-xs line-clamp-2 small">29/11/2025</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btnDownload btn btn-sm btn-0 fw-bold border-dark border-2 bg-yellow-0 hover:bg-yellow-500 mt-2 d-flex align-items-center gap-2">
                                    <i class="bi bi-download text-dark"></i>
                                    <span class="text-dark text-center">Baixar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="card w-100 bg-yellow-300 border-0 transition hover:bg-yellow-400 hover:scale-105">
                        <img src="imagem/mercado_vila_ouro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center text-1xl text-dark fw-bold line-clamp-1">Aniversário</h5>
                            <p class="card-text text-dark text-xs line-clamp-2 small">06/12/2025</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btnDownload btn btn-sm btn-0 fw-bold border-dark border-2 bg-yellow-0 hover:bg-yellow-500 mt-2 d-flex align-items-center gap-2">
                                    <i class="bi bi-download text-dark"></i>
                                    <span class="text-dark text-center">Baixar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'estrutura/footer.php'; ?>

    <!-- MODAIS -->
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
    <div class="modal fade my-5" data-bs-backdrop="static" data-bs-backdrop="bg-warning" id="modalCadastro" tabindex="-1" aria-labelledby="modalCadastroLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 rounded-2">
                <div class="modal-header">
                    <h5 class="modal-title font-bold text-base" id="modalCadastroLabel">Cadastrar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="back-end/cadastrar-usuario.php" id="formCadastro">
                    <input type="hidden" name="csrf_token" value="<?php echo isset($_SESSION['csrf_token']) ? $_SESSION['csrf_token'] : ''; ?>">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nome_usuario" class="form-label text-base">Nome de Usuário</label>
                            <input type="text" class="form-control text-sm border-warning focus:border-warning focus-ring focus-ring-warning" id="nome_usuario" name="nome_usuario" required minlength="4" maxlength="12" pattern="[A-Za-z0-9_]{4,12}" title="4-12 caracteres(letras alfanuméricos e underscores)">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-base">E-mail</label>
                            <input type="email" class="form-control text-sm border-warning focus:border-warning focus-ring focus-ring-warning" id="email" name="email" required minlength="6" maxlength="30" pattern="[a-zA-Z0-9._%+-]+@gmail\.com$" title="Digite um e-mail válido para o cadastro">
                        </div>
                        <div class="mb-3">
                            <label for="senha_usuario" class="form-label text-base">Senha</label>
                            <div class="input-group">
                                <input type="password" class="form-control text-sm border-warning focus:border-warning focus-ring focus-ring-warning" id="senha_usuario" name="senha_usuario" required minlength="8" maxlength="20" pattern="[A-Za-z0-9!@#$%^&*()_+\-=\[\]{};':\\\|,.<>\/? ]{8,20}" title="8-20 caracteres(letras alfanuméricos e caracteres especiais)">
                                <button type="button" class="btn btn-outline-secondary" id="toggleSenha">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- MODAIS -->
    <button id="btnTopo" class="btn btn-warning border-dark border-2 position-fixed bottom-0 end-0 m-4 rounded-circle shadow-lg transition hover:bg-yellow-500" style="width: 60px; height: 60px; display: none; z-index: 1000;">
        <i class="bi bi-caret-up-fill text-dark fs-3"></i>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script>
    <?php if (isset($_GET['modal']) && $_GET['modal'] === 'open'): ?>
        $('.modal-backdrop').remove();
        $('body').removeClass('modal-open').css({
            'overflow': '',
            'padding-right': ''
        });
        
        $('#modalCadastro').modal('show');
        
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.pathname);
        }
    <?php endif; ?>
    
    $('#modalCadastro').on('hidden.bs.modal', function () {
        if (window.history.replaceState && window.location.search) {
            window.history.replaceState(null, null, window.location.pathname);
        }
        
        setTimeout(function() {
            $('.modal-backdrop').remove();
            $('body').removeClass('modal-open').css({
                'overflow': '',
                'padding-right': ''
            });
        }, 100);
    });

    window.openImageModal = function(imageSrc) {
        $('#modalImageSource').attr('src', imageSrc);
        $('#imageModal').modal('show');
    };

    $('.btnDownload').on('click', function() {
        alert('Download iniciado!');
    });

    function toggleTheme() {
        const current = $('html').attr("data-bs-theme");
        const newTheme = current === "dark" ? "light" : "dark";
        $('html').attr("data-bs-theme", newTheme);
        localStorage.setItem("theme", newTheme);
    }

    // Botão Voltar ao Topo
$(document).ready(function() {
    const btnTopo = $('#btnTopo');
    
    // Mostrar/ocultar botão ao rolar
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            btnTopo.fadeIn(100);
        } else {
            btnTopo.fadeOut(100);
        }
    });
    
    // Rolagem suave ao topo
    btnTopo.click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 550);
        return false;
    });
});
</script>
</body>
</html>