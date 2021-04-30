<?php
require_once "conexao.php";
//como o banco de dados nao existe é preciso primeiro criar o bando para depois chamar e conectar ele
$conexao = novaConexao(null);

$sql = 'CREATE DATABASE IF NOT EXISTS faeterj_daw';

$resultado = $conexao->query($sql);
if($resultado) {
    echo "Sucesso :)<br>";
}
else{
    echo "Erro: " . $conexao->connect_error;
}

$conexao->close();
?>