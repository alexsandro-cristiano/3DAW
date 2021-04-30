<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];
    $nomeValido = 0;
    $emailValido = 0;
    $matriculaValido = 0;

    if (($email != "") && ($nome != "") && ($matricula != "" and ctype_digit($matricula))) {
        $matriculaValido = 1;
        $emailValido = 1;
        $nomeValido = 1;
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
    <main>
        <form action="inserir.php" method="post">
            <fieldset>
                <legend>Incluir Aluno</legend>

                <fieldset class="campo-interno">
                    <legend>Dados Acadêmicos</legend>
                    <label for="matricula">Matricula:</label>
                    <input type="text" name="matricula" id="matricula" placeholder="Digite a Matricula do Aluno">

                </fieldset>

                <fieldset class="campo-interno">
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
    <footer>
        <p>3DAW Atividade CRUD Aluno</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>

<?php
if (($nomeValido == 1) && ($emailValido == 1) && ($matriculaValido == 1)) {

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