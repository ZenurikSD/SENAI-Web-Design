<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brincando com a url</title>
</head>
<body>
    <?php
        /*Como sabemos, o método GET envia
        as informações diretamente pela url
        o que o torna menos seguro que o método
        POST, porém nos permite maior flexibilidade
        no estudo */

        echo "Vou chamar um valor p, diretamente
        pela url " . $_GET["p"] . "<br>";//SINTAXE na url -> url?variável=valor

        echo "Vou chamar um valor r, diretamente
        pela url " . $_GET["r"] . "<br>";//Para atribuirmos um segundo valor via url colocamos o e comercial &

        echo "A soma de p e r é: " . $_GET["p"]+$_GET["r"] . "<br>";

        echo "A subtração de p e r é: " . $_GET["p"]-$_GET["r"] . "<br>";

        echo "O produto de p por r é: " . $_GET["p"]*$_GET["r"] . "<br>";

        echo "A divisão de p por r é: " . number_format($_GET["p"]/$_GET["r"],2,",",".") . "<br>";
    ?>
</body>
</html>