<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>
    <form action="" method="get">
        Digite um número: <input type="number" name="number"><br>
        <button type="submit">Testar</button>
    </form>
</body>
</html>

<?php
$numero = $_GET['number'];

if ($numero % 2 == 0)
echo "$numero é par";
else
echo "$numero é ímpar";
?>