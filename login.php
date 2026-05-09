<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login - Doce Sonho</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body class="container" style="margin-top: 100px; max-width: 400px;">
    <article>
        <h2>Acesso Restrito</h2>
        <form action="autenticar.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <?php if (isset($_GET['erro'])) echo "<small style='color:red;'>Usuário ou senha inválidos!</small>"; ?>
    </article>
</body>

</html>