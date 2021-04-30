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
    <title>CRUD Aluno | Consultar Aluno</title>
</head>

<body>
    <header>
        <h1>Atividade | CRUD Alunos</h1>
    </header>
    <main>
        <form action="./listar_um_aluno.php" method="post">
            <fieldset>
                <legend>Consultar um Aluno</legend>
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
            <br>
        <!--INICIO DO BLOCO PHP-->
            <?php
            if ($pass) {
                require_once "./db/conexao.php";
                $conexao = novaConexao();

                if ($id != "") {
                    $sql = "SELECT * FROM aluno WHERE id = $id";
                    execultarSQL($id, $conexao, $sql);
                }
                else {
                    $sql = "SELECT * FROM aluno WHERE matricula = $matricula";
                    execultarSQL($matricula, $conexao, $sql);
                }
                $conexao->close;
            }

            function execultarSQL($chave, $conexao, $sql)
            {
                $resultado = $conexao->query($sql);
                if ($resultado->num_rows > 0) {
                    $registro = $resultado->fetch_assoc();

                    echo "id: " . $registro["id"] . "<br>"
                        . " Nome: " . $registro["nome"] . "<br>"
                        . " Email: " . $registro["email"] . "<br>"
                        . " Matrícula: " . $registro["matricula"];
                    echo "<br>";
                }
                else {
                    echo "<br><br>Não existe aluno com a chave: {$chave} informada.<br>";
                }
            }
            ?>

        <!--FIM DO BLOCO PHP-->
    </main>
    <footer>
        <p>3DAW Atividade CRUD Aluno</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>