<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/cliente.css">
    <link rel="stylesheet" href="../../css/mensagens-cliente.css">
    <title>CRUD Cliente | Inserir</title>
</head>

<body>
    <header>
        <h1>Prova AV1 | CRUD Cliente</h1>
    </header>

    <div id="corpo-form">
        <h1>Alterar</h1>
        <small style="color: red;">Atenção<br></small>
        <small>Preencher todos os campos</small>
        <form action="./alterar.php" method="post">
            <input type="int" name="id" placeholder="ID do Cliente" maxlength="30">
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
            <input type="text" name="cpf" placeholder="CPF somente números" maxlength="11">
            <input type="text" name="endereco" placeholder="Endereço" maxlength="30">
            <input type="text" name="cep" placeholder="CEP" maxlength="9">
            <input type="text" name="cidade" placeholder="Cidade" maxlength="30">
            <input type="text" name="estado" placeholder="Estado" maxlength="30">
            <button id="cancelar"><a href="./index.html">Cancelar</a></button>
            <input type="submit" value="Enviar">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $endereco = $_POST["endereco"];
            $cep = $_POST["cep"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];

            if (validarDados($nome, $cpf, $endereco, $cep, $cidade, $estado)) {

                if (alterar($id, $nome, $cpf, $endereco, $cep, $cidade, $estado)) {
        ?>
                    <div id="msg-sucesso">
                        Cliente Alterado com <strong>Sucesso</strong>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="msg-error">
                    Erro: Campo Vazio ou Incompleto
                </div>
        <?php
            }
        }
        ?>
    </div>

    <footer>
        <p>3DAW Prova AV1</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>

<?php

function alterar($id, $nome, $cpf, $endereco, $cep, $cidade, $estado)
{
    require_once "../../db/conexao.php";

    $sql = ("UPDATE `clientes` SET `id` = '$id', `nome` = '$nome', `cpf` = '$cpf', `endereco` = '$endereco', `cep` = '$cep', `cidade` = '$cidade', `estado` = '$estado' WHERE `clientes`.`id` = $id");

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if ($resultado) {
        return true;
    } else {
        return false;
    }
    $conexao->close();
}


function validarDados($nome, $cpf, $end, $cep, $cidade, $estado)
{
    if (!empty($nome) && (!empty($cpf) and ctype_digit($cpf)) && !empty($end) && (!empty($cep) and ctype_digit($cep)) && !empty($cidade) && !empty($estado)) {
        return true;
    }
    return false;
}

?>