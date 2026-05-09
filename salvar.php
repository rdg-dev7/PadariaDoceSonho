<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: index.php");
    exit();
}
include('conexao.php');

$nome = $_POST['nome'];
$preco = $_POST['preco'];


$sql = "INSERT INTO products (name, price) VALUES ('$nome', '$preco')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php"); // Volta para a vitrine
} else {
    echo "Erro: " . mysqli_error($conn);
}
