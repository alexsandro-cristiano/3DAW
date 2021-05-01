<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];

    $pass = false;

    if (($email != "") && ($nome != "") && ($matricula != "" and ctype_digit($matricula))) {
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
        .full_php{
            border: 1px black solid;
            margin: 3rem auto 3rem auto;
            padding: 2rem;
        }
    </style>
    <title>CRUD Alunos | Alterar</title>
</head>

<body>
    <header>
        <h1>Atividade | CRUD Alunos</h1>
    </header>
    <main>
        <form action="./alterar.php" method="post">
            <fieldset class="campo-interno">
                <legend>Alterar Aluno</legend>
                <label for="id">ID</label>
                <input type="text" name="id" id="id">

                <br><br>
                <fieldset>
                    <legend>Novos dados:</legend>

                    <br>
                    <legend>Dados Acadêmicos</legend>
                    <label for="matricula">Matricula:</label>
                    <input type="text" name="matricula" id="matricula" placeholder="Digite a Matricula do Aluno">

                    <br><br>
                    <legend>Dados Pessoas</legend>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite Nome Completo">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="E-mail">
                </fieldset>
            </fieldset>
            <div class="btn">
                <button><a href="./index.html">Cancelar</a></button>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </main>

    <div class="full_php">

        <?php
        if ($pass) {
            require_once "./db/conexao.php";

            $conexao = novaConexao();

            $sql = "SELECT * FROM aluno WHERE id = $id";
            $resultado = $conexao->query($sql);

            if ($resultado->num_rows > 0) {
                                
                $sql = "UPDATE `aluno` SET `nome` = '$nome', `email` = '$email', `matricula` = '$matricula' WHERE `aluno`.`id` = $id";
                if ($conexao->query($sql)) {
                    echo "Aluno alterado com sucesso!<br>";
                } else {
                    echo 'Erro: ' . $conexao->error . '<br>';
                }
            } else {
                echo "Não existe aluno com o ID correspondente!<br>";
            }
        }
        ?>
    </div>


    <footer>
        <p>3DAW Atividade CRUD Aluno</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>