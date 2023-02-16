<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form action="" method="get">
        Nome: <input type="text" name="nome"><br>
        Telefone: <input type="text" name="telefone"><br>
        E-mail: <input type="text" name="email"><br>
        <button type="submit">Salvar</button>
    </form>
</body>

</html>

<?php
$nome = $_GET['nome'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];

echo "Nome: $nome "," Telefone: $telefone "," E-mail: $email";
?>