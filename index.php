<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit();
}


include('conexao.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
...

<head>
    <title>Panificadora Doce Sonho</title>
    <a href=" logout.php">Sair do Sistema</a>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
            line-height: 1.6;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .btn {
            background: #4CAF50;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <h1>🍞 Cadastro de Preço de Produtos</h1>
    <a href="cadastro_produto.php" class="btn">+ Adicionar Novo Produto</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th style="text-align: right;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultado = mysqli_query($conn, "SELECT * FROM products");
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $linha['name'] . "</td>";
                echo "<td>R$ " . number_format($linha['price'], 2, ',', '.') . "</td>";
                echo "<td style='text-align: right;'>
                    <a href='editar_produto.php?id=" . $linha['id'] . "'>Editar</a> | 
                    <a href='excluir.php?id=" . $linha['id'] . "' onclick=\"return confirm('Tem certeza?')\" style='color: #e53935;'>Excluir</a>
                  </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>