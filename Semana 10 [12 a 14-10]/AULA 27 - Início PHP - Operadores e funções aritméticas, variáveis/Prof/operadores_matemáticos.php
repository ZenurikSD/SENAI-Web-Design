<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos</title>
</head>
<body>
    <?php
    /*Primeiro vamos atribuir duas variáveis */
    $num1 = 5;
    $num2 = 6;
    
    /*Podemos somar as variáveis */
    $sum = $num1 + $num2;
    echo "A soma de $num1 com $num2 é: $sum<br>";

    /*Podemos subtrair as variáveis */
    $minus = $num1 - $num2;
    echo "A subtração de $num1 com $num2 é: $minus<br>";

    /*Podemos multiplicar as variáveis */
    $mul = $num1 * $num2;
    echo "O produto de $num1 por $num2 é: $mul<br>";

    /*Podemos dividir as variáveis */
    $divi = $num1 / $num2;
    echo "A divisão de $num1 por $num2 é: $divi<br>";

    /*Posso fazer a exponenciação das variáveis */
    $pot = $num1 ** $num2;
    echo "Então o $num1 elevado à $num2 potência é: $pot<br>";

    /*Podemos encontrar o módulo [resto da divisão] */
    $mod = $num2 % $num1;
    echo "O resto da divisão entre $num2 e $num1 é: $mod<br>";

    ?>
</body>
</html>