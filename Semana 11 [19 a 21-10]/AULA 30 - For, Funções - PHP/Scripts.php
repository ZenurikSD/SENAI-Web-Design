<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aula 30 - PHP</title>
   <link rel="stylesheet" href="Estilo.css">

</head>
<body>
   <h2>For, Funções</h2>
   <p>"Fazer um HTML e PHP onde a pessoa coloca um valor no HTML e o PHP retorna sua tabuada. Dica: Use loop FOR."</p>
	<?php
   $num1 = $_POST["num1"];
   $num2 = $_POST["num2"];

	//Funções. Igual JS
   // function nome(argumentos){comando}
   function mensagem(){
      echo "Você recebeu uma mensagem.";
   }
   //---- mensagem();//chamada da função

   //função com argumentos definidos
   function adicao($num1, $num2){
      $soma = $num1 + $num2;
      echo "<p>Soma: $num1 + $num2 é = $soma</p>";
   }
   echo adicao($num1, $num2);

   //função com retorno. Guarda o valor retornado na função. Quando chamar a função com os parâmetros, ele vai mostrar o retorno.
   function subtracao($num1, $num2){
      $diferenca = $num1 - $num2;
      return $diferenca;//Guarda na função essa variável.
   }
      //Colocando as duas variáveis como parâmetros para a função de subtração.
      // X vira o 'num1', Y vira o 'num2'
      $x = 10;
      $y = 4;
      $resultado = subtracao($x, $y);
      echo "A subtração de $x - $y é = $resultado." 
   ?>

   <!-- Atividade ================================= -->
   <?php
      function tabuada($num1){
         for($fatorB = 0; $fatorB <= 10; $fatorB ++){
            $produto = $num1 * $fatorB;
            echo "$num1 x $fatorB = $produto <br>";
         }
      }
      tabuada($num1);
   
   ?>

	
</body>