function valores(str) {

    if (str.length > 0) {

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                limpaSelect();
                var campoResposta = document.getElementById('campoResposta');

                var result = JSON.parse(this.responseText);
                console.log(result);
                
                for(var i = 0; i < result.estado.length; i++){

                    var abrOption = document.createElement("option");
                    abrOption.value = result.estado[i];
                    abrOption.innerHTML = result.estado[i];
                    campoResposta.appendChild(abrOption);

                }

            }
        }

        xmlhttp.open("GET", "http://localhost/3DAW/src/atividades/ajax/cidade.php?estado="+str, true);
        xmlhttp.send();
    }
}

function limpaSelect(){
		var campoResposta = document.getElementById('campoResposta');

		campoResposta.parentNode.removeChild(campoResposta);

		var tag = document.createElement("select");
		tag.setAttribute("id", "campoResposta");
		document.body.appendChild(tag);
	}