<?php

echo "Leitura de Arquivo";

//funcao que ler todo o conteudo do arquivo
readfile(filename:"arquivo.txt");

//Manipular Aquivo

//abrindo o arquivo - igual C
$arq = fopen(filename:"", mode:"r")
or die("nao foi encontrado o arquivo");

//function to read file
echo fread($arq, filesize(filename:"nomedoarquivo"));


fclose($arq);
?>