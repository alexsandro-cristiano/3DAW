<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];
    $listarAluno = $_POST["listarAluno"];
    echo "listarAluno: $listarAluno";
    $nomeValido = 0;
    $matriculaValida = 0;
    $emailValido = 0;

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "dawfaeterj";

    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
    if ($conn->connect_error) {
        die("Conexao falhou: " . $conn->connect_error);
    }
    if ($nome != "" and ctype_alpha($nome)) {
        $nomeValido = 1;
    }
    if ($matricula != "" and ctype_alpha($matricula)) {
        $matriculaValida = 1;
    }
    if ($email != "") {
        $emailValido = 1;
    }

}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario Cadastro de Aluno</title>
    </head>
    <body>
    <form action="ex19FormIsereLista.php" method="POST">
        Nome: <input type="text" name="nome">
        <br><br>
        email: <input type="text" name="email">
        <br><br>
        Matricula: <input type="text" name="matricula">
        <br><br>
        <input type="checkbox" name="listarAluno" value="listarAluno">Listar Aluno
        <br><br>
        <input type="submit" value="enviar">
    </form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($listarAluno == 'listarAluno') {
        $sql = "SELECT * FROM `alunos`";
        $result = $conn->query($sql);
        echo $sql;
        echo "<br><br>";
        if ($result->num_rows > 0) {
            while ($linha = $result->fetch_assoc()) {
                echo "id: " . $linha["id"]
                    . " Nome: " . $linha["nome"]
                    . " Email: " . $linha["email"]
                    . " Email: " . $linha["matricula"];
                echo "<br><br>";
            }
        }
    } elseif ($matriculaValida = 0 && $nomeValido = 0 && $emailValido = 0) {
        $sql = "INSERT INTO `alunos`(`nome`, `email`, `matricula`) VALUES ('$nome','$email','$matricula')";
        //$result = $conn->query($sql);
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            echo "aluno $nome inserido com sucesso";
            //
        } else {
            echo "Erro no insert";
        }
    }
}
?>
</body>
</html>