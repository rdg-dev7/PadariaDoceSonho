<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit();
}
include('conexao.php');

$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$produto = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body class="container">
    <h1>📝 Editar Produto</h1>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

        <label>Nome do Produto</label>
        <input type="text" name="nome" value="<?php echo $produto['name']; ?>" required>

        <label>Preço (R$)</label>
        <input type="number" step="0.01" name="preco" value="<?php echo $produto['price']; ?>" required>

        <button type="submit">Salvar Alterações</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>

</html>