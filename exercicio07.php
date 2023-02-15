<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turno</title>
</head>
<body>
    <form action="" method="get">
        Digite o turno que você estuda: <input type="text" name="turno"><br>
        <button type="submit">Mensagem</button>
    </form>
</body>
</html>

<?php
$turno = $_GET['turno'];

echo "$turno <br>";
if ($turno == "M" || $turno == "m")
echo "Bom Dia!";

if ($turno == "V" || $turno == "v")
echo "Boa Tarde!";

if ($turno == "N" || $turno =="n")
echo "Boa Noite!";

else 
echo "Valor inválido";