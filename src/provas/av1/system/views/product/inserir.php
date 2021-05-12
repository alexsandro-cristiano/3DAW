<?php
function inserir() {
    $caminhoDoArq = "../../files/Produtos.csv";
    $arquivo = fopen("$caminhoDoArq", "r");

    fgetcsv($arquivo, 1000, ";");

    while ($dados = fgetcsv($arquivo, 1000, ";")) {
        # nome;descricao;preco;quantidade;peso
        $nome = $dados[0];
        $descricao = $dados[1];
        $preco = $dados[2];
        $quantidade = $dados[3];
        $peso = $dados[4];

        adicionarElemento($nome, $descricao, $preco, $quantidade, $peso);
    }

    fclose($arquivo);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>CRUD Produtos | Inserir</title>
</head>

<body>
    <header>
        <h1>Prova AV1 | CRUD Cliente</h1>
        <div>
            <nav>
                <a href="../index.html">Home</a>
            </nav>
        </div>
    </header>
    <?php
    inserir();
    ?>
    <footer>
        <p>3DAW Prova AV1</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>

<?php
function adicionarElemento($nome, $descricao, $preco, $quantidade, $peso)
{
    require_once "../../db/conexao.php";

    $sql = ("INSERT INTO produtos(nome, descricao, preco, quantidade, peso) VALUES ($nome,$descricao,$preco,$quantidade,$peso)");
    # $sql = "INSERT INTO `produtos` (`nome`, `descricao`, `preco`, `quantidade`, `peso`) VALUES ('$nome', '$descricao', $preco, $quantidade, $peso)";

    echo "valores recebidos<br><br>{$nome}<br>";
    echo "{$descricao}<br>";
    echo "{$preco}<br>";
    echo "{$quantidade}<br>";
    echo "{$peso}<br>";
    
    $conexao = novaConexao();

    var_dump($conexao);
    
    $resultado = $conexao->query($sql);

    var_dump($resultado);

    if ($resultado) {
        echo "Sucesso :)<br>";
    } else {
        echo "Erro: ";
    }

    $conexao->close();
}
?>