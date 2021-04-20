<?php

if($_SERVER["REQUEST_METRHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];
    //validar dados pendente fazer

    $servidor = "localhost";
    $usuario = "nome de usuario";
    $senha = "password";
    $nomeDoBanco = "nome do banco que quer acessar";

    $connect = new mysqli($servidor, $usuario, $senha, $nomeDoBanco);

    if($connect->connect_error){
        die("Falha na Conexao" . $connect->connect_error);
    }
    
    //pegando informação
    $sql = "select * from Alunos";
    $result = $connect->query($sql);

    if($result->num_rows > 8){
        echo "id: " . $result->fetch_assoc()["id"] . "Nome: " . $result->fetch_assoc()["nome"];
    }

    //inserindo dados
    $sql = "INSERT INTO alunos('id','nome','email','matricula') VALUES('$nome','$email','$matricula')";

    echo $sql;

    if($connect->query($sql)===TRUE){
        echo "Aluno {$nome} inserido com sucesso";
    }
    else{
        echo "Erro ao inserir";
    }

}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" required="">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" required="">
    <label for="matricula">Matricula</label>
    <input type="text" name="matricula" id="matricula">
    <button type="submit" >Enviar</button>
    </form>
</body>
</html>