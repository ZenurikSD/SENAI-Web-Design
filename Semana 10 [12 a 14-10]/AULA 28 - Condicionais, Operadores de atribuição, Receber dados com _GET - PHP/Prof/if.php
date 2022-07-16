<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso do Condicional IF para tratar um formulário</title>
</head>
<body>
    <?php
       /*O condicional IF fará com que uma certa condição seja verificada
       para saber o andamento do programa */
       $escola = $_GET["escola"];
       
       //SINTAXE: if (condição) {código a ser executado}
       if ($escola === "SENAI") {
           echo "Você escreveu o nome corretamente! que é: $escola<br>";
       }
    ?>
</body>
</html>