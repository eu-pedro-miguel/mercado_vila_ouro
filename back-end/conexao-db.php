<?php
$host = "localhost";
$dbname = "mercado_vila_ouro";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Configurações importantes para segurança e performance
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    // echo "Conexão bem-sucedida!"; // (opcional - remover em produção)
    
} catch(PDOException $e) {
    // Em produção, não mostrar detalhes do erro para o usuário
    error_log("Erro de conexão: " . $e->getMessage());
    die("Erro ao conectar com o banco de dados. Tente novamente mais tarde.");
}
?>