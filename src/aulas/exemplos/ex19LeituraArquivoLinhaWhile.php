<?php
echo "Leitura de Arquivos";
echo "<br><br>";
//   echo readfile("alunosImp.csv");
$arquivo = fopen("alunosImp2.csv", "r") or die("Não consegui abrir o arquivo, deu erro");

while(!feof($arquivo)) {
    $linha = fgets($arquivo);
    echo $linha;
    echo "<br>";
}
    echo "final do arquivo";

fclose($arquivo);

?>
