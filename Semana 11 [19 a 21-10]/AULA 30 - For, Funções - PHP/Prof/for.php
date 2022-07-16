<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For</title>
</head>
<body>
    <?php
        /*O loop for é bem parecido com o while */
        //SINTAXE: for (inicio; teste lógico; incremento){codigo}
        $i = $_GET['numero'];
        for ($j = $i; $j <= 20; $j++){
            echo $j . "<br>";
        }

        for ($k = $i; $k <= 20; $k++){
            if ($k == 15){
                break;
            }
            echo $k . "<br>";
        }
    ?>
    <a href="for.html">Voltar</a>
</body>
</html>