<?php
include('conexao.php');

// Pega o ID que veio pelo link
$id = $_GET['id'];

// Deleta o produto do banco
$sql = "DELETE FROM products WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Erro ao excluir: " . mysqli_error($conn);
}
