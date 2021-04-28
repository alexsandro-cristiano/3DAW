<?php
    echo "Leitura de Arquivos";
    echo "<br><br>";
 //   echo readfile("alunosImp.csv");
    $arquivo = fopen("alunosImp2.csv", "r") or die("Não consegui abrir o arquivo, deu erro");
    echo fread($arquivo, filesize("alunosImp2.csv"));
    fclose($arquivo);
?>