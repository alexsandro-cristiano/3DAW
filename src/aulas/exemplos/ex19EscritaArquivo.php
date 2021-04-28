<?php
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
?>