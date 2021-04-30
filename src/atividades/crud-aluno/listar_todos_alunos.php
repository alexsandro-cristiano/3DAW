<?php

require_once "./db/conexao.php";

//seleciona todos os dados da tabela
$sql = "SELECT * FROM aluno";

$conexao = novaConexao();

$resultado = $conexao->query($sql);
$registros = [];
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} else if ($conexao->error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
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
    <title>CRUD Aluno | Consultar Todos</title>
</head>

<body>
    <header>
        <h1>Atividade | CRUD Alunos</h1>
    </header>
    <main>
        <table>
            <thead>
                <th>CODIGO</th>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>MATRICULA</th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) : ?>
                    <tr>
                        <td><?= $registro['id'] ?></td>
                        <td><?= $registro['nome'] ?></td>
                        <td><?= $registro['email'] ?></td>
                        <td><?= $registro['matricula'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
    <div class="btn">
        <button> <a href="./index.html">Voltar</a></button>
    </div>
    <footer>
        <p>3DAW Atividade CRUD Aluno</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>