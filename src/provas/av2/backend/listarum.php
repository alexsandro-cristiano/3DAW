<?php
require_once "conexao.php";

header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$sql = "SELECT ``, `nome`, `categoria`, `precovenda`, `quantEst` FROM produtos WHERE `codBar` = 'ativo'";;

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

$msgErro = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $codBar = $_GET["codBar"];
    if (validarDados($codBar)) {
        require_once "conexao.php";
    
        $sql = "SELECT * FROM produtos WHERE `codBar` = '$codBar'";

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
        
    }
    else {
        echo $msgErro = "formulário com erro";
    }
}

function validarDado($codBar)
{
    if (!empty($codBar) ) {
        return true;
    }
    return false;
}

?>
