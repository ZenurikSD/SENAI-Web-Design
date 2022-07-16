<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro formulário</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $idade = $_GET["idade"];
        $email = $_GET["email"];
        echo "O nome inserido foi $nome $sobrenome, 
        possui $idade anos e seu email é $email<br>";
    ?>
</body>
</html>