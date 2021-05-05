<?php
function inserir()
{
    $caminhoDoArq = "./arquivos/alunosImp3.csv";
    $arquivo = fopen("$caminhoDoArq", "r");

    fgetcsv($arquivo, 1000, ";");

    while ($dados = fgetcsv($arquivo, 1000, ";")) {

        $matricula = $dados[0];
        $nome = $dados[1];
        $email = $dados[2];

        adicionarElemento($nome, $email, $matricula);
    }

    fclose($arquivo);
}
$arquivo = fopen($csv, 'r');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>CRUD Alunos | Inserir</title>
    <style>
        .campo-interno {
            margin-top: 2rem;
        }

        .btn {
            margin-top: 0.9rem;
            text-decoration: none;
            font-size: 17px;

        }

        .btn a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <header>
        <h1>Atividade | CRUD Alunos</h1>
    </header>

    <?php
    inserir();
    ?>
    <footer>
        <p>3DAW Atividade CRUD Aluno</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>

<?php
function adicionarElemento($nome, $email, $matricula)
{
    require_once "./db/conexao.php";

    $sql = "INSERT INTO `aluno` (`id`, `nome`, `email`, `matricula`) VALUES (NULL, '$nome', '$email', '$matricula')";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if ($resultado) {
        echo "Sucesso :)<br>";
    } else {
        echo "Erro: " . $conexao->connect_error;
    }

    $conexao->close();
}
?>