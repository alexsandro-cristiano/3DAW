<?php 
require_once "conexao.php";

	if ($_REQUEST['REQUES_METHOD']=="GET") {
		$codbarras = $_GET['codigo'];

		$conexao = novaConexao();
		
		if ($codbarras=="" or ctype_digit($codbarras)==0) {
			die("Codigo Invalido!");
		}

		$query = "SELECT * FROM produto WHERE codigodebarras='$cod'";

		$result = $conexao->query($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styleCadastro.css">
	<title>Detalhes do Produto</title>
</head>
<body>
	<table>
		<tr>
			<th>Codigo de barras</th>
			<th>Nome</th>
			<th>Fabricante</th>
			<th>Categoria</th>
			<th>Tipo de produto</th>
			<th>Preço de venda</th>
			<th>Quatidade em estoque</th>
			<th>Peso em gramas</th>
			<th>Descrição</th>
			<th>Link da imagem</th>
			<th>Data de inclusão</th>
		</tr>
		<?php 
			$dados = $result->fetch_assoc();
			echo"<img src="$dados['linkdaimagem']" width="300px" height="300px">";

			echo "<tr>";
				echo "<td>". $dados['codigodebarras'] ."</td>";
				echo "<td>". $dados['nome'] ."</td>";
				echo "<td>". $dados['fabricante'] ."</td>";
				echo "<td>". $dados['categoria'] ."</td>";
				echo "<td>". $dados['tipodeproduto'] ."</td>";
				echo "<td>". $dados['precodevenda'] ."</td>";
				echo "<td>". $dados['quantidadeemestoque'] ."</td>";
				echo "<td>". $dados['pesoemgramas'] ."</td>";
				echo "<td>". $dados['descricao'] ."</td>";
				echo "<td>". $dados['linkdaimagem'] ."</td>";
				echo "<td>". $dados['datadeinclusao'] ."</td>";
			echo "</tr>";
		?>

	</table>
</body>
</html>