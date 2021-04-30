<?php

require_once "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS aluno(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    matricula VARCHAR(30) NOT NULL
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)<br>";
}
else{
    echo "Erro: " . $conexao->connect_error;
}

$conexao->close();
?>
