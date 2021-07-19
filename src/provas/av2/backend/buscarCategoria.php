<?php 
	require_once "conexao.php";
	
	$conexao = novaConexao();

	$sql = "SELECT * FROM categoriasdeproduto";

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