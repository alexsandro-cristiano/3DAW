<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Somador</title>
    <style>
        label, input {
            display:block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Somador</h1>
    <form action="calculador.php" method="get">
        <label for="valorA">Valor A:</label>
        <input type="text" name="valorA" id="valorA">
        <label for="valorB">Valor B:</label>
        <input type="text" name="valorB" id="valorB">
        <input type="submit" value="enviar">
    </form>
</body>
</html>