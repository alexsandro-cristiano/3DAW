<!DOCTYPE html>
<html>
<head>
</head>
<body>
Comando loop while
<br>
<?php
$n1 = 0;
$n2 = 10;
$n3 = 10;
$s1 = "fusca";

while ($n1 < 10) {
    echo "While - O valor de n1 é $n1";
    echo "<br>";
    $n1++;
}
echo "<br>";
echo "<br>";
$n1 = 10;
do {
    echo "Do - O valor de n1 é $n1";
    echo "<br>";
    $n1++;
} while ($n1 < 10);

echo "<br>";
echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo "For - o valor de i é $i";
    echo "<br>";
}
?>
<br><br>
exercicio 12
</body>
</html>
