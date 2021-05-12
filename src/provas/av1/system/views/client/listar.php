<?php
require_once "../../db/conexao.php";

$sql = "SELECT * FROM clientes";

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
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/cliente.css">
    <title>CRUD Cliente | Alterar</title>
</head>

<body>
    <header>
        <h1>Prova AV1 | CRUD Cliente</h1>
    </header>
    <main>
        <div class="corpo-tabela">
            <table>
                <thead>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>ENDEREÇO</th>
                    <th>CEP</th>
                    <th>CIDADE</th>
                    <th>ESTADO</th>
                </thead>
                <tbody>
                    <?php foreach ($registros as $registro) : ?>
                        <tr>
                            <td><?= $registro['nome'] ?></td>
                            <td><?= $registro['cpf'] ?></td>
                            <td><?= $registro['endereco'] ?></td>
                            <td><?= $registro['cep'] ?></td>
                            <td><?= $registro['cidade'] ?></td>
                            <td><?= $registro['estado'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>
    <button id="voltar"> <a href="./index.html">Voltar</a></button>
    <footer>
        <p>3DAW Prova AV1</p>
        <p>by Alexsandro Cristiano Gonçalves da Silva</p>
    </footer>
</body>

</html>