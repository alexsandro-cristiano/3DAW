<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Somador</title>
</head>
<body>
    <?php
        if(($_GET['valorA'] == "") || ($_GET['valorB'] == "")) {
            echo "<p>ERRO:<br>Verificar valor <em>vazio</em> informado</p>";
        }
        else {
            $valorA = intval($_GET['valorA']);
            $valorB = intval($_GET['valorB']);
            $soma = $valorA + $valorB;
            echo "Soma {$valorA} + {$valorB} = {$soma}";
        }
    ?>
    <br><br>
    <a href="index.php"><button>voltar</button></a>
</body>
</html>