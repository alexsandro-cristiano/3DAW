<!--
    CODIGO ORIGINAL
echo "Leitura de Arquivos";
echo "<br><br>";
//   echo readfile("alunosImp.csv");
$arquivoSaida = fopen("alunosNovosExp.csv", "w") or
                die("Não consegui abrir o arquivo, deu erro");
$linhaArquivo = "nome;email;matricula\n";
fwrite($arquivoSaida, $linhaArquivo);
$linhaArquivo = "josé da silva;ze@gmail.com;20211123456\n";
fwrite($arquivoSaida, $linhaArquivo);
fclose($arquivoSaida);

file_put_contents("C:\\xampp\\htdocs\\3DAW\\alunosNovosExp.csv", $linhaArquivo, FILE_APPEND);
-->

<?php
echo "Escrita de Arquivos";
echo "<br><br>";
$arquivoSaida = fopen("alunosNovosExp.csv", "w") or die("Não consegui abrir o arquivo, deu erro");

$linhaArquivo = "nome;email;matricula\n";
fwrite($arquivoSaida, $linhaArquivo);

$linhaArquivo = "josé da silva;ze@gmail.com;20211123456\n";
fwrite($arquivoSaida, $linhaArquivo);


fclose($arquivoSaida);

echo'1 - arquivo escrito com sucesso';

$linhaArquivo = "fabio da silva;fabio@gmail.com;2021010556\n";
$caminho = "D:\workspace\3DAW\src\aulas\exemplos\leitura_escrita_arqs\alunosNovosExp.csv";
file_put_contents($caminho, $linhaArquivo, FILE_APPEND);

echo'<br>2 - alteração do arquivo com sucesso';
?>