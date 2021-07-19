<?php
require_once "conexao.php";

$conexao = novaConexao();

	$codigo = $_GET['cod'];


	if (!strlen($codigo) or !ctype_digit($codigo)) {
		die("<br>Falha na conexão!");
	}

$sql = "UPDATE produto SET ativo=0 WHERE codigodebarras='$codigo'";


if (mysqli_query($conexao,$sql)) {
		echo "Produto excluido com sucesso!";
	}else{
		die("<br>Falha na alteração da linha<br><br>" . $sql . "<br><br>" . mysqli_error($conn));
	}
?>