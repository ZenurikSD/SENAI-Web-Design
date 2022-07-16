<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pós e Pré Incremento e Decremento</title>
</head>
<body>
    <?php
        /*Vimos que podemos utiliza o ++ e o -- para
        incrementar e decrementar, respectivamente, uma
        certa variável, porém podemos realizar esta operação
        de duas formas distintas */

        //Vamos definir uma variável
        $idade = 34;
        echo "Em 14/10/2021 José da Silva possui $idade anos!<br>";
        
        //echo "Em 14/10/2022 José da Silva possuirá " . $idade++ . " anos!<br>";//Me retornará um erro, pois o incremento será dado após mostrar a variável
        echo "Em 14/10/2021 José da Silva possuirá " . ++$idade . " anos!<br>";//Com o pré incremento, ele primeiramente incrementa a variável para depois mostrá-la

        $ano = 2020;
        echo "O ano passado foi o ano de " . $ano-- . " e dois anos atrás, foi: " . $ano . "<br>";//Ele decrementou DEPOIS de mostrar a variável, logo posso simplesmente chamar a variável na sequência

        
    ?>
</body>
</html>