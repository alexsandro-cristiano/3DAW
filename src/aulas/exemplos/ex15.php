<!DOCTYPE html>
<html>
<head>
</head>
<body>
Função
<br>
<?php

function escreveNaTela() {
    echo "escrevi na tela";
    echo "<br>";
}
function escreveNaTelaOParametro($param) {
    echo $param;
    echo "<br>";
}

$n1 = 0;
$cores = array("azul", "verde", "vermelho", "amarelo", "preto", "branco", "lilas");

escreveNaTela();
escreveNaTelaOParametro("escrevi na tela o parametro");

?>
<br><br>
exercicio 15
</body>
</html>
