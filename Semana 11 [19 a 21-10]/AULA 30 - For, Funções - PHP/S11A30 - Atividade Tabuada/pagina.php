<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="Alisson Silva">
   <title>Aula 30 - PHP</title>
   <link rel="stylesheet" href="Estilo.css">

</head>
<body>
   <main>
   <h2>For, Funções</h2>
   <p>"Fazer um HTML e PHP onde a pessoa coloca um valor no HTML e o PHP retorna sua tabuada. Dica: Use loop FOR."</p>
	
   <fieldset>
   <legend>Tabuada de 0 a 10</legend>
   <?php
   // Atividade ============================================

   //Pega o valor do input no HTML e coloca em uma variável
   $num1 = $_POST["num1"];

   function tabuada($num1){
      for($fatorB = 0; $fatorB <= 10; $fatorB ++){
         $produto = $num1 * $fatorB;
         echo "$num1 x $fatorB = $produto <br>";
      }
   };

      /*EXPLICAÇÃO-------
      O fator é o segundo termo da multiplicação e vai contar de 0 a 10. Esses números vão ser usados a seguir.
   
      para (um fator = zero; se o fator for menor ou igual que 10; incremente (1) ao fator){
         um produto = número dado pelo usuário * fatorB;
         mostre "número * fatorB = produto"
      } 
      */
   tabuada($num1);
   ?>
   </fieldset>
   </main>

</body>