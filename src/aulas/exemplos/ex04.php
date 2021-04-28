<!DOCTYPE html>
<html>
<head>
</head>
<body>
texto em html antes
<?php
$nome1 = "MARCO GAMA";
$nome2 = "JUAN SILVA";
$nome3 = "DEBORA GABRIEL";
$nome4 = "FRANCISCO SOARES";
$nome5 = "THALES MOREIRA";
$nome6 = "AMANDA SILVA";

echo "<h1>Alo alo bom dia PHP</h1>";
echo "<h2>Alo alo bom dia " . $nome1 . "</h2>";
echo "<br> turma de 3DAW";
echo "<table border='1'><tr><td>" . $nome1 . "</td><td>" . $nome2 . "</td><td>" . $nome3 . "</td></tr>";
echo "<tr><td>$nome4</td><td>$nome5</td><td>$nome6</td></tr></table>";
?>
<br><br>
texto em html depois
</body>
</html>