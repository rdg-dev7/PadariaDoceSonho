<?php
session_start();
if (!isset($_SESSION['logado'])) {
    exit();
}
include('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "UPDATE products SET name = '$nome', price = '$preco' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conn);
}
