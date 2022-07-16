<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis em PHP</title>
</head>
<body>
    <?php
        /*As variáveis no php são designadas
            por $ (cifrão) */

        /*O PHP é case sensitive, ou seja,
        nome é diferente de Nome, NOME, noMe etc... */
        $nome = "Pedro";
        $idade = 34;

        //Usaremos o comando echo para imprimir algo na tela

        //Primeira FORMA, usando CONCATENAÇÃO de strings
        //A concatenação é chamada usando o ponto .
        echo "O seu nome é: ".$nome." e você possui: ".$idade."anos!<br>";

        //Segunda FORMA, colocando as variáveis dentro das aspas
        echo "O seu nome é: $nome, e você possui $idade anos!!!";
    ?>
</body>
</html>