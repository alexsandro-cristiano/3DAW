<?php

echo "Escrever de Arquivo";

//Manipular Aquivo

//abrindo o arquivo - igual C
$arq = fopen(filename:"alunos_novos.txt", mode:"w")
or die("nao foi encontrado o arquivo");


$linhaDoArquivo = "Teste de escrita. Se esta no arquivo parabens tudo fluiu bem";

fwrite($arq, $linhaDoArquivo);
file_put_contents($arq, $linhaDoArquivo, FILE_APPEND);
fclose($arq);
?>