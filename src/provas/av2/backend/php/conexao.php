<?php

function novaConexao() {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "root";
    $nomeDoBanco = "prova_daw";

    //criar instancia de mysqli
    $conexao = new mysqli($servidor, $usuario, $senha, $nomeDoBanco);

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    //retornando a conexao já estabelecida com o banco de dados
    return $conexao;
}