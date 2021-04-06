<?php
    include(index.html);
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $opcao = $_GET['opcao'];
    
    if($num1 == "" || $num2 == "") {
        echo "<p>ERRO:<br>Verificar valor <em>vazio</em> informado</p>";
    }
    else {
        switch($opcao) {
            case "soma":
                $resultado = $num1 + $num2;
                echo "O resultado da soma é: {$resultado}";
            break;
            case "sub":
                $resultado = $num1 - $num2;
                echo "O resultado da subtração é: {$resultado}}";
            break;
            case "mult":
                $resultado = $num1 * $num2;
                echo "O resultado da multiplição é: {$resultado}";
            break;
            case "divisao":
                $resultado = $num1 / $num2;
                echo "O resultado da divisão é:{$resultado}";
            break;
        }
    }
?>