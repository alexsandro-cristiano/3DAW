<!DOCTYPE html>
<html>
<head>
</head>
<body>
Tipos de Dados
<br>
== Igual
<br>
=== identico
<br>
!= ou <> diferente
<br>
!== não identico
<br>
> maior que
<br>
< menor que
<br>
>= maior ou igual
<br>
<= menor ou igual
<br>
<?php
$n1 = 10;
$n2 = 10;
$n3 = 10;

if ($n1 == $n2) {
    echo "n1 é igual a n2 -> n1=$n1 e n2=$n2";
    echo "<br>";
}

if ($n2 === $n3) {
    echo "n2 é identico a n3 -> n2=$n2 e n3=$n3";
    echo "<br>";
} else {
    echo  "n2 é não identico a n3 -> n2=$n2 e n3=$n3";
    echo "<br>";
}

if ($n1 != $n3) {
    echo "n1 é diferente de n3 -> n1=$n1 e n3=$n3";
    echo "<br>";
} elseif ($n1 === $n3) {
    echo "n1 é identico a n3 -> n1=$n1 e n3=$n3";
    echo "<br>";
} else {
    echo "n1 é igual a n3 -> n1=$n1 e n3=$n3";
    echo "<br>";
}

?>
<br><br>
exercicio 09
</body>
</html>
