<?php
include('conexao.php');
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM users WHERE username = '$usuario'";
$res = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($res);

if ($user && password_verify($senha, $user['password'])) {
    $_SESSION['logado'] = true;
    $_SESSION['admin'] = $user['username'];
    header("Location: index.php");
    exit();
} else {
    header("Location: login.php?erro=1");
    exit();
}
