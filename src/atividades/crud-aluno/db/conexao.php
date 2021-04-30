<?php

function novaConexao($nomeDoBanco = 'faeterj_daw'){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "root";

    //criar instancia de mysqli
    $conexao = new mysqli($servidor, $usuario, $senha, $nomeDoBanco);

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    //retornando a conexao já estabelecida com o banco de dados
    return $conexao;
}
