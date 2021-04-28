<!DOCTYPE html>
<html>
<head>
</head>
<body>
Comando loop for com array
<br>
<?php
$n1 = 0;
$cores = array("azul", "verde", "vermelho", "amarelo", "preto", "branco", "lilas");

echo "Cores da bandeira: " . $cores[0] . ", " . $cores[1] . ", " . $cores[3] . " e " . $cores[5];
echo "<br>";
echo "<br>";
for ($i = 0; $i < 7; $i++) {
    echo "For - a cor da posição $i é $cores[$i]";
    echo "<br>";
}

echo "<br>";
echo "<br>";
foreach ($cores as $cor) {
    echo "Foreach - a cor é $cor";
    echo "<br>";
}

?>
<br><br>
exercicio 14
</body>
</html>
