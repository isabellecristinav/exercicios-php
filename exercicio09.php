<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mês</title>
</head>

<body>
    <form action="" method="get">
        Digite o valor do mês desejado: <input type="text" name="mes"><br>
        <button type="submit">Exibir</button>
    </form>
</body>

</html>
<?php
$mes = [
    "Janeiro", "Fevereiro",
    "Março", "Abril",
    "Maio", "Junho",
    "Julho", "Agosto",
    "Setembro", "Outubro",
    "Novembro", "Dezembro"
];

$numMes = 8;

if ($numMes >= 1 && $numMes <= 12) {
    echo $mes[$numMes - 1];
} else {
    echo "Mês inválido";
}
?>