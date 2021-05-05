<?php
    echo "Leitura de Arquivos";
    echo "<br><br>";
 //   echo readfile("alunosNovosExp.csv");
    $arquivo = fopen("alunosNovosExp.csv", "r") or die("Não consegui abrir o arquivo, deu erro");
    echo fread($arquivo, filesize("alunosImp2.csv"));
    fclose($arquivo);
?>