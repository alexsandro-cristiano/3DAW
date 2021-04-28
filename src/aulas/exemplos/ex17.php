<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $formValido = 0;
    $nomeValido = 0;
    $emailValido = 0;
    $idadeValido = 0;

    if ($nome != "" and ctype_alpha($nome)) {
        $nomeValido = 1;
    }
    if ($idade != "" and ctype_digit($idade)) {
        $idadeValido = 1;
    }
    if ($email != "") {
        $emailValido = 1;
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario chamando script php</title>
</head>
<body>
<form action="ex17.php" method="post">
    Nome: <input type="text" name="nome">
    <br><br>
    Idade: <input type="text" name="idade">
    <br><br>
    email: <input type="text" name="email">
    <br><br>
    <input type="submit" value="enviar">
</form>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($nomeValido == 1 and $idadeValido == 1 and $emailValido == 1) {
        echo  "Olá $nome";
        echo "<br>";
        echo "Sua idade é $idade";
        echo "<br>";
        echo "Seu email é $email";
    } else {
        echo  "<p>Formulário com erro, preencha corretamente</p>";
        echo "<br>";

    }
}

?>

</body>
</html>
