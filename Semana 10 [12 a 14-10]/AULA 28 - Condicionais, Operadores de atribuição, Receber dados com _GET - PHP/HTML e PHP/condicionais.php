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
      echo "<h2>PHP: Retornos dos condicionais</h2>";
         //SINTAXE: if (condição) {código a ser executado}
         $escola = $_GET["escola"];
         if ($escola === "SENAI") {
         echo "<p>Você acertou, a escola é: $escola<br></p>";
         }

         //--if.else--------------------------------------
         $idade = $_GET["idade"];
         //SINTAXE: if (condição) {comando} else {comando}
         if ($idade >= 18) {
            echo "<p>Você tem $idade anos, já pode dirigir.</p>"; }
         else{
            echo "<p>Você tem $idade anos, ainda não pode dirigir.</p>"; }; //veja que a terminação (ponto e vírgula) só vem depois que completa o if-else.

         //--if.elseif..else-------------------------------
         //serve para verificar mais de duas condições.
         //SINTAXE: if (condição_A){comando_A} elseif (condição_B){comando_B} else {comando_C}
         /*
         16 ou +70 anos voto opcional
         18 - 70 anos voto obrigatório
         */
         //se idade for menor que 16
         if ($idade < 16){
            echo '<p>Você não tem idade para votar ainda.</p>'; }
         //se for menor que 18 ou maior que 70
         elseif ($idade < 18 || $idade > 70){
            echo '<p>Você tem idade para votar, seu voto é opcional.</p>'; }
         //se não, só sobra idade entre 18 e 70, então:
         else {
            echo '<p>Você tem idade para votar e seu voto é <b>obrigatório</b></p>'; 
         };
    ?>
</body>
</html>