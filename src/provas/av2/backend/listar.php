<?php
require_once "conexao.php";
$conexao = novaConexao();
	$sql = "SELECT * FROM produto WHERE ativo='1'";
	$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../assets/css/global.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
  />
	<title>Listar Todos Produtos</title>
</head>
<body>
	<table>
		<tr>
			<th>Código de barras</th>
	        <th>Nome</th>
	        <th>Categoria</th>
	        <th>Preço de Venda</th>
	        <th>Quantidade em estoque</th>
		</tr>
	
		<?php 
			$dados = $result->fetch_assoc();
			do{
		?>
		<tr>
            <td><?=$dados['codigodebarras']?></td>
            <td><a href="http://localhost/3DAW/src/provas/av2/backend/detalheProd.php?codigo=<?=$linha['codigo de barras']?>"><?=$dados['nome']?></a></td>
            <td><?=$dados['categoria']?></td>
            <td><?=$dados['precodevenda']?></td>
            <td><?=$dados['quantidadeemestoque']?></td>
        </tr>
	    <?php 
	    	} while ($dados = $result->fetch_assoc())
	    ?>
    </table>
</body>
</html>