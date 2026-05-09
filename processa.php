<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "<h2>Sucesso!</h2>";
    echo "Olá <strong>$nome</strong>, sua conta com o e-mail <strong>$email</strong> foi simulada com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
}
