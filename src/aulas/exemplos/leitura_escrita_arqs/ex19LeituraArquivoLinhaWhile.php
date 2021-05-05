<?php
echo "Leitura de Arquivos COM WHILE";
echo "<br><br>";
//   echo readfile("alunosImp.csv");
$arquivo = fopen("alunosNovosExp.csv", "r") or die("Não consegui abrir o arquivo, deu erro");

while(!feof($arquivo)) {
    $linha = fgets($arquivo) . '<br>';
    echo $linha;
    echo "<br>";
}
    echo "final do arquivo";

fclose($arquivo);

?>
