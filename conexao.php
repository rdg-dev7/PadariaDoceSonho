<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";

// 1. Conecta apenas ao servidor (sem especificar o banco ainda)
$conn_servidor = mysqli_connect($host, $user, $pass);

// 2. Cria o banco 'padaria' se ele não existir
mysqli_query($conn_servidor, "CREATE DATABASE IF NOT EXISTS padaria");

// 3. Agora conecta ao banco específico
$conn = mysqli_connect($host, $user, $pass, "padaria");

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// 4. Cria a tabela de produtos se não existir
$sql_tabela = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
mysqli_query($conn, $sql_tabela);

// Criar a tabela de usuários (admins)
$sql_user = "CREATE TABLE IF NOT EXISTS users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL)";

mysqli_query($conn, $sql_user);

// Criar um usuário padrão se não existir (Login: admin / Senha: 123)
// Usamos password_hash por segurança, nunca salve senha em texto puro!
$check_user = mysqli_query($conn, "SELECT * FROM users WHERE username = 'admin'");
if (mysqli_num_rows($check_user) == 0) {
    $senha_segura = password_hash('123', PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('admin', '$senha_segura')");
}
