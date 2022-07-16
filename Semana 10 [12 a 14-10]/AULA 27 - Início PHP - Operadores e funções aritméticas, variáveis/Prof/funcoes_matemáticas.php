<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Matemáticas</title>
</head>
<body>
    <?php
        /*Função abs() retorna o valor absoluto */
        $num1 = -8;
        // Ao usar uma função se faz necessária a concatenação de strings
        echo "O valor $num1 tem como valor absoluto ".abs($num1)."<br>";

        /*Função pow() retorna a exponenciação */
        $num2 = 3;
        $num3 = 4;
        echo "O valor $num2 elevado à $num3 potência, vale: ".pow($num2,$num3)."<br>";

        /*A função sqrt() retorna a raiz quadrada */
        $num4 = 9;
        echo "A raiz quadrada de $num4 é: ".sqrt($num4)."<br>";

        /*A função round() arredonda o número */;
        $num5 = 50;
        $num6 = 6;
        $divi = $num5 / $num6;
        echo "A divisão de $num5 por $num6 é inexata e seu valor arredondado é: ".round($divi)."<br>";

        /*A função intval() retorna o valor inteiro */
        $num7 = 65.85;
        echo "O número $num7 tem como parte INTEIRA: ".intval($num7)."<br>";

        /*A função number_format() formata o número */
        $num8 = 6548286.3258745;
        echo "O número $num8 pode ser formatado: ".number_format($num8,3,",",".")." deixando-o com 3 casas decimais, a vírgula como separador decimal e o ponto como separador milenar<br>";
    ?>
</body>
</html>