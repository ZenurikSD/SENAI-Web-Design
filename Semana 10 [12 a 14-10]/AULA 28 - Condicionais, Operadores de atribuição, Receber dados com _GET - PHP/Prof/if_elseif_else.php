<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso dos condicionais IF, ELSEIF, ELSE</title>
</head>
<body>
    <?php
        /*Podemos utilizar o\\s condicionais para
        verificar diversas condições possíveis */

        //SINTAXE: if (condição_A) {comando_A} elseif (condição_B) {comando_B} else {comando_C}
        $idade = $_GET["idade"];
        if ($idade < 16) {
            echo "Sua idade é: $idade, você NÃO pode votar!";
        }

        elseif ($idade < 18 || $idade >= 70)//as duas barras verticais || significam OU
        {
            echo "Sua idade é: $idade, seu voto é opcional!";
        }

        else {
            echo "Sua idade é: $idade, e seu voto é obrigatório!";
        }
    ?>
</body>
</html>