<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Calculadora</title>
    <style>
        select, label, input {
            display:block;
            margin-bottom: 10px;
        }

        .saida {
            margin: 50px 25px 0 0;
            border: solid 2px black;
        }
    </style>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="index.php" method="POST">
        <div>
            <select name="opcao">
                <option selected>Escolha a operação desejada</option>
                <option value="soma">Adição</option>
                <option value="sub">Subtração</option>
                <option value="mult">Multiplicação</option>
                <option value="divisao">Divisão</option>
                <option value="mod">Resto da Divisão</option>
                <option value="divpor1">1 divido por n</option>
                <option value="exp">Exponenciacao</option>
                <option value="raiz">Raiz Quadrada</option>
            </select>
        </div>
        <div>
            <label for="num1">Digite um número</label>
            <input type="text" name="num1" placeholder="Digite um número">
            <label for="num2">Digite um número</label>
            <input type="text" name="num2" placeholder="Digite um número">
        </div>
        <input type="submit" value="Enviar">               
    </form>

</body>
</html>

<?php
    
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $opcao = $_POST['opcao'];
    
    if($num1 == "" || $num2 == "") {
        echo "<div class='saida'><p>ERRO:<br>Verificar valor <em>vazio</em> informado</p></div>";
    }
    else {
        switch($opcao) {
            case "soma":
                $resultado = soma($num1,$num2);
                echo "<div class ='saida';>O resultado da soma é: {$resultado}</div>";
            break;
            case "sub":
                $resultado = subtracao($num1,$num2);
                echo "<div class ='saida'>O resultado da subtração é: {$resultado}</div>";
            break;
            case "mult":
                $resultado = multiplicacao($num1,$num2);
                echo "<div class ='saida'>O resultado da multiplição é: {$resultado}</div>";
            break;
            case "divisao":
                $resultado = divisao($num1,$num2);
                echo "<div class ='saida'>O resultado da divisão é:{$resultado}</div>";
            break;
            case "mod":
                $resultado = mod($num1,$num2);
                echo "<div class ='saida'>O resto da divisão é:{$resultado}</div>";
            break;
            case "divpor1":
                $num1 = 1;
                $resultado = divpor1($num1,$num2);
                echo "<div class ='saida'>O resultado da divisão 1 por {$num2} é:{$resultado}</div>";
            break;
            case "exp":
                $resultado = exp($num1,$num2);
                echo "<div class ='saida'>O resultado da exponenciação é:{$resultado}</div>";
            break;
            case "raiz":
                $resultado = raiz($num1,$num2);
                echo "<div class ='saida'>O resultado da raiz é:{$resultado}</div>";
            break;
        }
    }

    function soma($a, $b) {
        return $a + $b;
    }

    function subtracao($a, $b) {
        return $a - $b;
    }

    function multiplicacao($a, $b) {
        return $a * $b;
    }

    function divisao($a, $b) {
        return $a / $b;
    }

    function mod($a, $b) {
        return $a % $b;
    }

    function divpor1($a, $b) {
        return $a / $b;
    }

    function exp($a, $b) {
        return $a**$b;
    }

    function raiz($a) {
        return sqrt($a);
    }
?>
