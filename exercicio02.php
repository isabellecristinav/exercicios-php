<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caractere</title>
</head>
<body>
<form action=''method ="get">
    Digite um caractere: <input type="text" name="carac"><br>
    <button type="submit">Testar</button>
</form>    
</body>
</html>

<?php
$meuCaractere = $_GET['carac'];
if (ctype_digit($meuCaractere))
echo "É digito";
?>