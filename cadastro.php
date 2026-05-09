<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro - Doce Sonho</title>
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
    <h1>🍞 Cadastrar Administrador</h1>
    <form action="processa.php" method="POST">
        <input type="text" name="nome" placeholder="Seu nome" required><br><br>
        <input type="email" name="email" placeholder="Seu e-mail" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="index.php">Voltar para o Início</a>
</body>

</html>