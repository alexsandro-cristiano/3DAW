<!DOCTYPE html>
<html>
<head>
</head>
<body>
Operadores Logicos
<br>
and Incrementa antes de 1 a variavel N1
<br>
or Incrementa depois de 1 a variavel N1
<br>
xor
<br>
<br>
<br>

<br>
<?php
$n1 = 10;
$n2 = 10;
$n3 = 10;
$n4 = 15;

echo "Operador AND";
echo "<br>";
if ($n1 == $n2 and $n1 == $n3 and $n4 == 12) {
    echo "n1 é igual a n2 e n3 -> n1=$n1, n2=$n2 e n3=$n3";
    echo "<br>";
} else {
    echo "n1 não é igual a n2 e n3 ou n4 é diferente de 12-> n1=$n1, n2=$n2 e n3=$n3, n4=$n4";
    echo "<br>";
}
echo "Operador OR";
echo "<br>";
if ($n1 == $n2 or $n1 == $n3 or $n4 == 12) {
    echo "n1 é igual a n2 e n3 -> n1=$n1, n2=$n2, n3=$n3 e n4=$n4";
    echo "<br>";
} else {
    echo "n1 não é igual a n2 e n3 ou n4 é diferente de 12-> n1=$n1, n2=$n2 e n3=$n3, n4=$n4";
    echo "<br>";
}

echo "Operador XOR";
echo "<br>";
$n3 = 11;
if ($n1 == $n2 xor $n1 == $n3 xor $n4 == 12) {
    echo "n1 é igual a n2 e diferente de n3 -> n1=$n1, n2=$n2, n3=$n3 e n4=$n4";
    echo "<br>";
} else {
    echo "n1 não é igual a n2 ou n3 ou n4 é diferente de 12-> n1=$n1, n2=$n2 e n3=$n3, n4=$n4";
    echo "<br>";
}

$n5 = ($n3==11) ? 0 : 1;
echo "O valor de n5 é $n5";
echo "<br>";


?>
<br><br>
exercicio 11
</body>
</html>
