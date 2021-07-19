<?php 
    require_once "conexao.php";
	
	$codatual=$_GET['codatual'];
	$codnovo = $_GET['codigo'];
	$nome = $_GET['nome'];
	$fabric = $_GET['fabricante'];
	$categ = $_GET['categoria'];
	$tipo = $_GET['tpprod'];
	$preco = $_GET['precovenda'];
	$qtdest = $_GET['qtdestoque'];
	$pesogr = $_GET['pesogramas'];
	$descricao = $_GET['descricao'];
	$linkimg = $_GET['linkimagem'];
	$datainc = $_GET['data'];
	$ativo = 1;
	$ErroForm=0;


	//Função que valida dados alfanuméricos
	function validaAlpha($formDado){
		if ($formDado == "" or ctype_alpha($formDado)==0) {
			return 0;
		}else{
			return 1;
		}
	}

	//função que valida dados numéricos
	function validaDigit($formDado){
		if ($formDado == "") {
			return 0;
		}else{
			return 1;
		}
	}

	//fazendo a validação dos campos
	if (validaDigit($codnovo)==0 or validaAlpha($nome)==0 or validaAlpha($fabric)==0 or validaDigit($qtdest)==0 or validaDigit($pesogr)==0 or validaAlpha($descricao)==0 or validaAlpha($linkimg)==0 or validaAlpha($datainc)==0 or validaAlpha($preco)==0 or validaAlpha($erroForm)==0 ) {
		$ErroForm = 1;
	}

	if ($erroForm == 1) {
		die("Preencha corretamente o formulário!<br>");
	}
	$conexao = novaConexao();
$sql = ("UPDATE produto SET codigodebarras='$codnovo',nome='$nome',fabricante='$fabric',categoria='$categ',tipodeproduto='$tipo',precodevenda='$preco',quantidadeemestoque='$qtdest',pesoemgramas='$pesogr', descricao='$descricao', linkdaimagem='linkimg',datadeinclusao='data' WHERE codigodebarras='$codatual'";);

if (mysqli_query($conexao,$sql)) {
    echo "<br>Dados alterados com sucesso!";
}else{
    die("<br>Falha na alteração da linha<br><br>" . $sql . "<br><br>" . mysqli_error($conexao));
}

 ?>