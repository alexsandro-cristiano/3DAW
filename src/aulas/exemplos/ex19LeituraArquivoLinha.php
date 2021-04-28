<?php
echo "Leitura de Arquivos";
echo "<br><br>";
//   echo readfile("alunosImp.csv");
$arquivo = fopen("alunosImp2.csv", "r") or die("Não consegui abrir o arquivo, deu erro");

echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
echo fgets($arquivo);
echo "<br>";
if (feof($arquivo))
    echo "final do arquivo";

fclose($arquivo);

?>
