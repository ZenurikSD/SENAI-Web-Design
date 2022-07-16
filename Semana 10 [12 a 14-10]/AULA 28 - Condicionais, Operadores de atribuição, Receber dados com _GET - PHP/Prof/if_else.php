<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso do IF e ELSE</title>
</head>
<body>
    <?php
        /*Podemos usar o IF -se- e o ELSE -senão- para tratar os dados recebidos*/

        $idade = $_GET["idade"];
        //SINTAXE: if (condição) {comando} else {comando}
        if ($idade >= 18) {
            echo "Você tem $idade anos, JÁ pode dirigir!";
        }
        else{
            echo "Você tem $idade anos, ainda NÃO pode dirigir";
        }
    ?>
</body>
</html>