<?php
require_once "conexao.php";

header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$sql = "SELECT `codBar`, `nome`, `categoria`, `precovenda`, `quantEst` FROM produtos WHERE `ativo` = 'ativo'";;

$conexao = novaConexao();

$resultado = $conexao->query($sql);

$registros = [];

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
    echo json_encode($registros);

} else if ($conexao->error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>
