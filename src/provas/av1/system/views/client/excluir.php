<?php
function testeDadosRecebidos($nome, $id)
{
    if (($id != "") && ($nome != "")) {
        return true;
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nome = $_GET["nome"];
    $id = $_GET["id"];

    if (testeDadosRecebidos($nome, $id)) {

        require_once "../../db/conexao.php";
        $conexao = novaConexao();

        $sql = "DELETE FROM `clientes` WHERE `id` = '$id' AND `nome` = '$nome'";
        $resultado = $conexao->query($sql);

        if ($resultado) {
        ?>
            <div id="msg-sucesso">
                Registro Deletado com <strong>Sucesso</strong>
            </div>
        <?php

        } else {
        ?>
            <div class="msg-error">
                <?= "Erro: " . $conexao->connect_error; ?>
            </div>
        <?php

        }
        $conexao->close;
    } else {
        ?>
        <div class="msg-error">
            Erro: Campos Não Informado
        </div>
<?php
    }
    require_once "./excluir.html";
}
