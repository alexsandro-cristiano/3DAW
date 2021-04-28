<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<?php
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $email = $_GET["email"];
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

    if ($nomeValido == 1 and $idadeValido == 1 and $emailValido == 1) {
        echo  "Olá $nome";
        echo "<br>";
        echo "Sua idade é $idade";
        echo "<br>";
        echo "Seu email é $email";
    } else {
        echo  "Formulário com erro, preencha corretamente";
        echo "<br>";

    }

?>
</body>
</html>