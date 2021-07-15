<?php
$msgErro = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    $nome = $_GET["nome"];
    $fabricante = $_GET["fabricante"];
    $categoria = $_GET["categoria"];
    $tpprod = $_GET["tpprod"];
    $precoVenda = $_GET["precoVenda"];
    $quantEst = $_GET["quantEst"];
    $pesoGrama = $_GET["pesoGrama"];
    $descricao = $_GET["descricao"];
    $linkImg = $_GET["linkImg"];
    $data = $_GET["data"];
    $ativo = $_GET["ativo"];
    $codBar = $_GET["codBar"];

    if (validarDados($nome, $fabricante, $categoria, $tpprod, $precoVenda, $quantEst, $pesoGrama, $descricao, $linkImg, $data, $ativo, $codBar)) {
        require_once "conexao.php";
    
        $sql = "INSERT INTO `produtos` (`nome`, `fabricante`, `categoria`, `tpprod`, `precovenda`, `quantEst`, `pesoGrama`, `descricao`, `linkImg`, `data`, `ativo`, `codBar`)
        VALUES ('$nome', '$fabricante', '$categoria', '$tpprod', '$precoVenda', '$quantEst', '$pesoGrama', '$descricao','$linkImg', '$data', '$ativo', '$codBar')";
    
        $conexao = novaConexao();
        $resultado = $conexao->query($sql);
    
        if ($resultado) {
            return true;
        } else {
            return false;
        }
        $conexao->close();
    }
    else {
        $msgErro = "formulário com erro";
    }
}

function validarDados($nome, $fabricante, $categoria, $tpprod, $precoVenda, $quantEst, $pesoGrama, $descricao,
$linkImg, $data, $ativo, $codBar)
{
    if (!empty($nome) && !empty($fabricante) && !empty($categoria) && !empty($tpprod) && !empty($precoVenda)
    && !empty($quantEst) && !empty($pesoGrama) && !empty($descricao) && !empty($linkImg) && !empty($data) &&
    !empty($codBar) ) {
        return true;
    }
    return false;
}

?>