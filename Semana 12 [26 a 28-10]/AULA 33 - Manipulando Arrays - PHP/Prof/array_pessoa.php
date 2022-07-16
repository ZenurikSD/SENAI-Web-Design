<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor Pessoa</title>
</head>
<body>
    <?php
        $pessoa = array("nome" => $_GET['nome'],
                        "sobrenome" => $_GET['sobrenome'],
                        "idade" => $_GET['idade']);
        echo "Seu nome é: " . strtolower($pessoa['nome']) . " " . strtolower($pessoa['sobrenome']) . " e você possui " . $pessoa['idade'] . " anos!<br>";
        echo strtolower($pessoa['sobrenome']);
    ?>
    <a href="array_pessoa.html">Voltar</a>
</body>
</html>