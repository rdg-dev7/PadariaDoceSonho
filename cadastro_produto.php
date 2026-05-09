<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit();
}
include('conexao.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Novo Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <h1>🥖 Cadastrar Produto</h1>
    <form action="salvar.php" method="POST">
        <label>Nome do Produto:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco" required><br><br>

        <button type="submit">Salvar Produto</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>

</html>