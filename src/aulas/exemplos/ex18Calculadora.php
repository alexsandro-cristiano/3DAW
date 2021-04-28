<?php

$a = $_GET["a"];
$b = $_GET["b"];
$op = $_GET["op"];

$aValido = 0;
$bValido = 0;

$resultado = 0;

if ($a != "" and ctype_digit($a)) {
    $aValido = 1;
}
if ($b != "" and ctype_digit($b)) {
    $bValido = 1;
}
function soma(int $a, int $b) {
    return $a + $b;
}
function subtracao(int $a, int $b) {
    return $a - $b;
}
function multiplicacao(int $a, int $b) {
    return $a * $b;
}
function divisao(int $a, int $b) {
    return $a / $b;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Calculadora</h2>
<br>
<form action="ex18Calculadora.php" method="get">
    A: <input type="text" name="a">
    <br><br>
    B: <input type="text" name="b">
    <br><br>
    Operação: Soma <input type="radio" name="op" value="soma">
    <br>
    Subtração <input type="radio" name="op" value="sub">
    <br>
    Multiplicação <input type="radio" name="op" value="multi">
    <br>
    Divisão <input type="radio" name="op" value="divi">
    <br>
    <input type="submit" value="enviar">


<h3>Resultado</h3>
<?php
if ($aValido == 0 || $bValido == 0) {
    echo "Por favor preencha os campos ";
} elseif ($op == "soma") {
    $resultado = soma($a, $b);
    echo "$a + $b = " . $resultado;
} elseif ($op == "sub") {
    $resultado = subtracao($a, $b);
    echo "$a - $b = " . $resultado;
} elseif ($op == "multi") {
    $resultado = multiplicacao($a, $b);
    echo "$a * $b = " . $resultado;
} elseif ($op == "divi") {
    $resultado = divisao($a, $b);
    echo "$a / $b = " . $resultado;
} else {
    echo "escolha a operação";
}
echo "<br><br>";
echo "<input type='text' name='resultado' value=$resultado>";
?>
</form>
</body>
</html>