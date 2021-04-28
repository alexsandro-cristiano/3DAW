<!DOCTYPE html>
<html>
<head>
</head>
<body>
Tipos de Dados
<?php
$n1 = 10;
$f1 = 5.3227;
$b1 = true;
$s1 = "3DAW";
$alunos = array("MARCO GAMA", "JUAN SILVA", "DEBORA GABRIEL");
$nl = null;
var_dump($n1);
echo "<br>";
var_dump($f1);
echo "<br>";
echo "é float? ";
var_dump(is_float($f1));
echo "<br>";
echo "é int? ";
var_dump(is_int($f1));
echo "<br>";
echo "Arredondando variavel float com round(): ";
echo(round($f1));
echo "<br>";
echo "Arredondando variavel float com round(x, y): ";
echo(round($f1,2));
echo "<br>";
var_dump($b1);
echo "<br>";
var_dump($alunos);
echo "<br>";
var_dump($nl);
echo "<br>";
echo $f1 + $n1;
echo "<br>";
echo "string $s1";
echo "<br>";
echo strlen($s1);
echo "<br>";


?>
<br><br>
exercicio 06
</body>
</html>
