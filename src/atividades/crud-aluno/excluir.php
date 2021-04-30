<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $matricula = $_POST["matricula"];
    $pass = false;

    if (($id != "") || ($matricula != "" and ctype_digit($matricula))) {
        $pass = true;
    } else {
        echo 'ERRO COM A INFORMAÇÃO PASSADA!<br>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <style>
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
    <title>CRUD Aluno | Excluir</title>
</head>

<body>
    <header>
        <h1>Atividade | CRUD Alunos</h1>
    </header>
    <main>
        <form action="./excluir.php" method="post">
            <fieldset>
                <legend>Delete</legend>
                <label for="id">ID</label>
                <input type="text" name="id" id="id">
                <br>
                <label for="matricula">Matricula</label>
                <input type="text" name="matricula" id="matricula">
            </fieldset>
            <div class="btn">
                <button><a href="./index.html">Cancelar</a></button>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </main>

    <?php
    if ($pass) {
        require_once "./db/conexao.php";
        $conexao = novaConexao();
        if ($id != "") {
            $sql = "DELETE FROM aluno WHERE id = $id";
            execultarSQL($conexao, $sql);
        } else {
            $sql = "DELETE FROM aluno WHERE matricula = $matricula";
            execultarSQL($conexao, $sql);
        }
        $conexao->close;
    }

    function execultarSQL($conexao, $sql)
    {
        $resultado = $conexao->query($sql);

        if ($resultado) {
            echo "<br><br>Registro Deletado com sucesso<br>";
        } else {
            echo "<br><br>Erro: " . $conexao->connect_error;
        }
    }
    ?>
    <footer>
        <p>3DAW Atividade CRUD Aluno</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>