<?php
echo "Leitura de Arquivos LINHA ";
echo "<br><br>";
//   echo readfile("alunosImp.csv");
$arquivo = fopen("alunosNovosExp.csv", "r") or die("Não consegui abrir o arquivo, deu erro");

echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
echo fgets($arquivo) . '<br>';
echo "<br>";
if (feof($arquivo))
    echo "final do arquivo";

fclose($arquivo);

?>
