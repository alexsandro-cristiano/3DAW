<?php 
require_once "conexao.php";
	$categoria = $_GET['categoria'];
	
	$conexao = novaConexao();
	
	if($categoria=="Cama, mesa e banho"){
		$sql = "SELECT * FROM camamesaebanho";
	}else if ($categoria=="Eletrodomésticos") {
		$sql = "SELECT * FROM eletrodomesticos";
	}else if ($categoria=="Informática") {
		$sql = "SELECT * FROM informatica";
	}else if ($categoria=="Decoração") {
		$sql = "SELECT * FROM decoracao";
	}

	$dados = mysqli_query($conexao,$sql);

	$linha = mysqli_fetch_assoc($dados);

	$total = mysqli_num_rows($dados);

		if($total > 0) {
			do {
			$json[] = array('nome'=>$linha['nome']);
			}while($linha = mysqli_fetch_assoc($dados));
		}else{
			echo "<br>Tabela vazia!!";
		}
		echo json_encode($json);

?>