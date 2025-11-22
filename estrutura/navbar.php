<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inicializar variáveis
$usuarioLogado = false;
$usuarioNome = '';

// Verificar se usuário está logado na session E se ainda existe no banco
if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true && isset($_SESSION['usuario_nome'])) {
    try {
        require_once 'C:\xampp\htdocs\mercado_vila_ouro\back-end\conexao-db.php';
        
        $check_sql = "SELECT id FROM usuario WHERE nome_usuario = :nome_usuario";
        $check_stmt = $pdo->prepare($check_sql);
        $check_stmt->execute([':nome_usuario' => $_SESSION['usuario_nome']]);
        
        if ($check_stmt->fetch()) {
            // Usuário ainda existe no banco
            $usuarioLogado = true;
            $usuarioNome = $_SESSION['usuario_nome'];
        } else {
            // Usuário foi removido do banco - limpar session
            unset($_SESSION['usuario_logado']);
            unset($_SESSION['usuario_nome']);
        }
    } catch (Exception $e) {
        // Em caso de erro na conexão, mantém a session
        $usuarioLogado = true;
        $usuarioNome = $_SESSION['usuario_nome'];
    }
}
?>

<nav class="navbar navbar-expand-lg bg-yellow-200">
    <div class="container-fluid">
        <a class="navbar-brand fs-4 text-dark css-navbar-titulo" href="#">Mercado Vila de Ouro</a>
        
        <!-- Form de pesquisa (SEM ms-auto) -->
        <form class="d-flex" role="search">
            <input class="form-control me-2 mt-2 border-2 border-warning focus:ring-4 focus:ring-yellow-400" type="search" placeholder="Pesquise" aria-label="Search" style="width: 17.0rem">
            <button class="btn btn-outline-success me-2 mt-2 p-2 text-light bg-green-600 hover:bg-green-700" type="submit"><i class="bi bi-search"></i></button>
        </form>

        <!-- Área do usuário/botões (COM ms-auto) -->
        <div class="d-flex align-items-center ms-auto">
            <?php if ($usuarioLogado): ?>
            <!-- Dropdown do usuário -->
            <!-- Dropdown do usuário -->
            <div class="dropdown me-3">
                <button class="btn btn-link d-flex align-items-center text-decoration-none p-0" 
                        type="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false" 
                        style="border: none; background: none;">
                    <i class="bi bi-person-circle fs-4 text-dark me-2"></i>
                    <span class="text-dark text-2xl fw-bold"><?php echo htmlspecialchars($usuarioNome); ?></span>
                    <!-- Seta personalizada com classe Bootstrap -->
                    <span class="text-dark ms-1">▼</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Meu Perfil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configurações</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-heart me-2"></i>Meus Favoritos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#" onclick="logout()"><i class="bi bi-box-arrow-right me-2"></i>Sair</a></li>
                </ul>
            </div>
            <?php else: ?>
            <div id="authButtons">
                <button class="btn btn-md me-2 mt-2 btn-outline-primary text-light bg-blue-500 hover:bg-blue-600" type="submit">Entrar</button>
                <button class="btn btn-md me-2 mt-2 btn-outline-primary text-light bg-blue-500 hover:bg-blue-600" type="button" data-bs-toggle="modal" data-bs-target="#modalCadastro">Cadastrar</button>
            </div>
            <?php endif; ?>
            
            <button type="button" class="btn btn-md me-2 mt-2 btn-outline-dark text-light bg-dark transition transform hover:scale-105" onclick="toggleTheme()">
                Alternar Tema
            </button>
        </div>
    </div>
</nav>

<script>
function logout() {
    if (confirm('Deseja realmente sair?')) {
        // Fazer requisição para logout
        fetch('back-end/logout.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                window.location.reload();
            });
    }
}
</script>