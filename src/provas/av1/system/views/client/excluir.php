<?php
function testeDadosRecebidos($nome, $id)
{
    if (($id != "") || ($nome != "")) {
        return true;
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once "./excluir.html";
    $nome = $_GET["nome"];
    $id = $_GET["id"];

    if (testeDadosRecebidos($nome, $id)) {
        
        require_once "../../db/conexao.php";
        $conexao = novaConexao();

        $sql = "DELETE FROM `clientes` WHERE `id` = '$id'";
        $resultado = $conexao->query($sql);

        if ($resultado) {
            echo "<br><br>Registro Deletado com sucesso<br>";
        } else {
            echo "<br><br>Erro: " . $conexao->connect_error;
        }

        $conexao->close;
    }
    else {
        echo "Campos Vazios<br>";
    }
}
