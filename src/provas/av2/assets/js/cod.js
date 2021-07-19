function exibirCategoria(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200){

			var result = JSON.parse(this.responseText);
			var categoria = document.getElementById('categoria');

			//criando as options
			result.forEach((elemento)=>{
				option = new Option(elemento.nome,elemento.toLowerCase);
				categoria.options[categoria.options.length] = option;
			})
				
		}
	}
	xmlhttp.open("GET", "buscarCategoaria.php",true);
    xmlhttp.send();
}

function exibirTipos(str){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200){
			var result = JSON.parse(this.responseText);
			var categoria = document.getElementById('tpprod');

			removerOpcao(categoria);
			result.forEach((elemento)=>{
				option = new Option(elemento.nome,elemento.toLowerCase);
				categoria.options[categoria.options.length] = option;
			})	
		}
	}
	xmlhttp.open("GET", "buscarTipos.php?categoria="+str,true);
    xmlhttp.send();
}

function removerOpcao(selectElement) {
   var i, L = selectElement.options.length - 1;
   for(i = L; i >= 0; i--) {
      selectElement.remove(i);
   }
}

//função para enviar o formulario 
function enviarForm() {
	var codbarras = document.getElementById('codbarras');
	var nome = document.getElementById('nome').value;
	var fabricante = document.getElementById('fabricante').value;
	var categoria = document.getElementById('categoria').value;
	var tpprod = document.getElementById('tpprod').value;
	var precovenda = document.getElementById('precovenda').value;
	var qtdestoque = document.getElementById('qtdestoque').value;
	var pesogramas = document.getElementById('pesogramas').value;
	var descricao = document.getElementById('descricao').value;
	var linkimagem = document.getElementById('linkimagem').value;
	var datainclusao = document.getElementById('datainclusao').value;
	var erroForm = 0;

	if (verificarCod(codbarras)==0) {
		document.getElementById('resposta').innerHTML+= "Codigo de barras inválido!<br>";
		erroForm = 1;
	}

	if (verificar(nome)==0) {
		document.getElementById('resposta').innerHTML+= "Nome inválido!<br>";
		erroForm = 1;
	}

	if (verificar(fabricante)==0) {
		document.getElementById('resposta').innerHTML+= "Fabricante inválido!<br>";
		erroForm = 1;
	}

	if (verificar(precovenda)==0) {
		document.getElementById('resposta').innerHTML+= "Preço de venda inválido!<br>";
		erroForm = 1;
	}

	if (verificar(qtdestoque)==0) {
		document.getElementById('resposta').innerHTML+= "Quantidade de estoque inválido!<br>";
		erroForm = 1;
	}

	if (verificar(pesogramas)==0) {
		document.getElementById('resposta').innerHTML+= "Peso em gramas inválido!<br>";
		erroForm = 1;
	}

	if (verificar(descricao)==0) {
		document.getElementById('resposta').innerHTML+= "Descrição inválido!<br>";
		erroForm = 1;
	}

	if (verificar(linkimagem)==0) {
		document.getElementById('resposta').innerHTML+= "Link de imagem inválido!<br>";
		erroForm = 1;
	}

	if (verificar(datainclusao)==0) {
		document.getElementById('resposta').innerHTML+= "Data de inclusão inválido!<br>";
		erroForm = 1;
	}

	
	if (erroForm==0) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
	            document.getElementById("resposta").innerText = this.responseText;
	        }

		}
		xmlhttp.open("GET","incluir.php?codigo="+codbarras.value+"&nome="+nome+"&fabricante="+fabricante+"&categoria="+categoria+"&tpprod="+tpprod+"&precovenda="+precovenda+"&qtdestoque="+qtdestoque+"&pesogramas="+pesogramas+"&descricao="+descricao+"&linkimagem="+linkimagem+"&data="+datainclusao,true);
		xmlhttp.send();
	}
}

function verificarrCod(str){
	if (str.value.length == 13) {
		return 1;
	}else{
		return 0;
	}
}


function verificar(str){
	if (str != "") {
		return 1;
	}else{
		return 0;
	}
}


function mostraInfos(str) {
	if (str.length>0) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange =  function () {
			if (this.readyState == 4 && this.status == 200) {
				if (this.responseText!="Produto não existente!") {
					document.getElementById('res1').innerHTML="";
					var result = JSON.parse(this.responseText);
					document.getElementById('codbarras1').value = result[0].cod;
					document.getElementById('nome1').value=result[0].nome;
					document.getElementById('fabricante1').value=result[0].fabricante;
					document.getElementById('categoria1').value=result[0].categoria;
					document.getElementById('tpprod1').value=result[0].tipodeproduto;
					document.getElementById('precovenda1').value=result[0].precodevenda;
					document.getElementById('qtdestoque1').value=result[0].qtdemestoque;
					document.getElementById('pesogramas1').value=result[0].pesoemgramas;
					document.getElementById('descricao1').value=result[0].descricao;
					document.getElementById('linkimagem1').value=result[0].linkdaimagem;
					document.getElementById('datainclusao1').value=result[0].datainclusao;
				}else{
					console.log(this.responseText);
					document.getElementById('res1').innerHTML= this.responseText;
				}				
	        }
		}
		xmlhttp.open("GET","alterar.php?cod="+str,true);
		xmlhttp.send();
	}
}

function mostrarDados(str){
	if (str.length>0) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200){
				if (this.responseText!="Produto não existente!"){
					document.getElementById('res1').innerHTML="";
					var result = JSON.parse(this.responseText);
					document.getElementById('cod').innerHTML=result[0].cod;
					document.getElementById('nome').innerHTML=result[0].nome;
					document.getElementById('categoria').innerHTML=result[0].categoria;
					document.getElementById('preco').innerHTML=result[0].precodevenda;
					document.getElementById('qtdestoque').innerHTML=result[0].qtdemestoque;
					document.getElementById('imagem').src = result[0].linkdaimagem;
					console.log(this.responseText);
				}else{
					console.log(this.responseText);
					document.getElementById('res1').innerHTML= this.responseText;
				}
			}
		}
		xmlhttp.open("GET","alterar.php?cod="+str,true);
		xmlhttp.send();
	}
}

function alterarForm(){
	var codigoatual = document.getElementById('codbarras1');
	var codbarras = document.getElementById('codbarras2');
	var nome = document.getElementById('nome2').value;
	var fabricante = document.getElementById('fabricante2').value;
	var categoria = document.getElementById('categoria').value;
	var tpprod = document.getElementById('tpprod').value;
	var precovenda = document.getElementById('precovenda2').value;
	var qtdestoque = document.getElementById('qtdestoque2').value;
	var pesogramas = document.getElementById('pesogramas2').value;
	var descricao = document.getElementById('descricao2').value;
	var linkimagem = document.getElementById('linkimagem2').value;
	var datainclusao = document.getElementById('datainclusao2').value;
	var erroForm = 0;

	if (verificarCod(codbarras)==0) {
		document.getElementById('resposta').innerHTML+= "Codigo de barras inválido!<br>";
		erroForm = 1;
	}

	if (verificar(nome)==0) {
		document.getElementById('resposta').innerHTML+= "Nome inválido!<br>";
		erroForm = 1;
	}

	if (verificar(fabricante)==0) {
		document.getElementById('resposta').innerHTML+= "Fabricante inválido!<br>";
		erroForm = 1;
	}

	if (verificar(precovenda)==0) {
		document.getElementById('resposta').innerHTML+= "Preço de venda inválido!<br>";
		erroForm = 1;
	}

	if (verificar(qtdestoque)==0) {
		document.getElementById('resposta').innerHTML+= "Quantidade de estoque inválido!<br>";
		erroForm = 1;
	}

	if (verificar(pesogramas)==0) {
		document.getElementById('resposta').innerHTML+= "Peso em gramas inválido!<br>";
		erroForm = 1;
	}

	if (verificar(descricao)==0) {
		document.getElementById('resposta').innerHTML+= "Descrição inválido!<br>";
		erroForm = 1;
	}

	if (verificar(linkimagem)==0) {
		document.getElementById('resposta').innerHTML+= "Link de imagem inválido!<br>";
		erroForm = 1;
	}

	if (verificar(datainclusao)==0) {
		document.getElementById('resposta').innerHTML+= "Data de inclusão inválido!<br>";
		erroForm = 1;
	}

	if (erroForm==0) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
	            document.getElementById("resposta").innerText = this.responseText;
	        }

		}
		xmlhttp.open("GET","alterar.php?codatual="+codigoatual.value+"&codigo="+codbarras.value+"&nome="+nome+"&fabricante="+fabricante+"&categoria="+categoria+"&tpprod="+tpprod+"&precovenda="+precovenda+"&qtdestoque="+qtdestoque+"&pesogramas="+pesogramas+"&descricao="+descricao+"&linkimagem="+linkimagem+"&data="+datainclusao,true);
		xmlhttp.send();
	}

}


function excluir() {
	var str = document.getElementById('codbarras1').value;
	console.log(str);
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200){
				document.getElementById("resposta").innerText = this.responseText;
			}
	}
	xmlhttp.open("GET","excluir.php?cod="+str,true);
	xmlhttp.send();
}

