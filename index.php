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
    <?php include 'estrutura/carousel.php'; ?>
    <?php include 'estrutura/categorias.php'; ?>
    <?php include 'estrutura/ofertas.php'; ?>
    <?php include 'estrutura/tabloides.php'; ?>
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
                            <input type="text" class="form-control text-sm border-warning focus:border-warning focus-ring focus-ring-warning" id="nome_usuario" name="nome_usuario" required minlength="4" maxlength="12" pattern="[a-zA-Z0-9_]{4,12}" title="4-12 caracteres(letras alfanuméricos e underscores)">
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
</body>
</html>