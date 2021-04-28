<?php

function novaConexao() {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeDoBanco = 'dawfaeterj';

    //Criando objeto do tipo mysql
    $conexao = new mysqli($servidor,$usuario,$senha,$nomeDoBanco);

    //Verificar se consegui conectar no banco
    if($conexao->connect_error) {
        die('ERRO: ' . $conexao->connect_error);
    }

    //Retornando para quem chamou o objeto mysql
    return $conexao;
}

?>