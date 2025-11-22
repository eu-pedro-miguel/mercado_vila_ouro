<?php
session_start();
require_once 'conexao-db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Validação básica dos campos
    if (empty($_POST['nome_usuario']) || empty($_POST['email']) || empty($_POST['senha_usuario'])) {
        header('Location: ../index.php?error=' . urlencode('Todos os campos são obrigatórios') . '&modal=open');
        exit;
    }
    
    $nome_usuario = trim($_POST['nome_usuario']);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $senha_usuario = $_POST['senha_usuario'];
    
    // Validação de email
    if (!$email) {
        header('Location: ../index.php?error=' . urlencode('Email inválido') . '&modal=open');
        exit;
    }
    
    // Validação do nome de usuário
    if (strlen($nome_usuario) < 3) {
        header('Location: ../index.php?error=' . urlencode('Nome de usuário deve ter pelo menos 3 caracteres') . '&modal=open');
        exit;
    }
    
    // Validação da senha (mínimo de segurança)
    if (strlen($senha_usuario) < 4) {
        header('Location: ../index.php?error=' . urlencode('Senha deve ter pelo menos 4 caracteres') . '&modal=open');
        exit;
    }
    
    try {
        // Verificar se email já existe
        $check_sql = "SELECT id FROM usuario WHERE email = :email";
        $check_stmt = $pdo->prepare($check_sql);
        $check_stmt->execute([':email' => $email]);
        
        if ($check_stmt->fetch()) {
            header('Location: ../index.php?error=' . urlencode('Email já cadastrado') . '&modal=open');
            exit;
        }
        
        // Verificar se nome de usuário já existe
        $check_sql = "SELECT id FROM usuario WHERE nome_usuario = :nome_usuario";
        $check_stmt = $pdo->prepare($check_sql);
        $check_stmt->execute([':nome_usuario' => $nome_usuario]);
        
        if ($check_stmt->fetch()) {
            header('Location: ../index.php?error=' . urlencode('Nome de usuário já existe') . '&modal=open');
            exit;
        }
        
        // Inserir no banco (senha em texto puro - conforme solicitado)
        $sql = "INSERT INTO usuario (nome_usuario, email, senha_usuario) VALUES (:nome_usuario, :email, :senha_usuario)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome_usuario' => $nome_usuario,
            ':email' => $email,
            ':senha_usuario' => $senha_usuario  // Senha em texto puro
        ]);

        $_SESSION['usuario_logado'] = true;
        $_SESSION['usuario_nome'] = $nome_usuario;

        header('Location: ../index.php?success=1&modal=open');
        exit;
        
    } catch(PDOException $e) {
        // Log do erro (não mostrar para o usuário)
        error_log("Erro no cadastro: " . $e->getMessage());
        
        // Mensagem genérica para o usuário
        header('Location: ../index.php?error=' . urlencode('Erro ao cadastrar usuário') . '&modal=open');
        exit;
    }
} else {
    header('Location: ../index.php');
    exit;
}