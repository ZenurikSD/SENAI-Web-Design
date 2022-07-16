<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=<, initial-scale=1.0">
   <title>Continuação dos conceitos básicos</title>
</head>
<body>
   <h2>Operadores, Formulários e Condicionais</h2>
   <?php
      //ASsim como no JS, o igual tem funções diferentes.
      // ( = ) significa receber, tipo a setinha no VisuAlg
      // ( == ) significa igualdade, o uso que a gente conhece.
      // ( === ) significa 'estritamente igual', idêntico. Leva em consideração o tipo de dado, argumentos, etc.

      $x = 10; //var X recebe 10

      //( + ) Operador de 'atribuição' de adição
      $y = 20;
      echo "<p>Início: Valor X = $x, Valor Y = $y <br>";
      $y += 10; //Op de incremento. é o mesmo que y = y + 10
      echo "Y agora é $y</p>";

      //Os outros seguem o mesmo modelo. Vou pular subtração e divisão.

      //( * ) Operador de atribuição de multiplicação
      $z = 5;
      echo "<p>Valor Z = $z <br>";
      $z *= 10; // z = z + 10
      echo "Z agora é $z </p>";

      //===============================================
      echo "<h3>Método GET</h3>";
      echo "<p>Atribuindo uma variável diretamente pela url <br> ";
      // Sintaxe: <url?variável=valor>, para vários separe com &
      echo "Valor P = ".$_GET['p'].", Valor R = ".$_GET['r']."<br>";

      echo "P + R = ".$_GET['p'] + $_GET['r']."</p>";

      //===============================================
      echo "<h3>Pré e pós incremento/decremento.</h3>";
      $idade = 21;
      echo "<p>Em 14/10/2021, eu tenho $idade anos. <br>";
      //Pós: ($idade++) O PHP primeiro retorna a variável e depois incrementa;
      //Pré: Primeiro incrementa, depois retorna o valor. 
      echo "Na mesma data em 2022, terei ".++$idade." anos. <br>";

      //Retorna, decrementa, e retorna o novo valor.
      $ano = 2020;
      echo "O ano passado foi ".$ano--.". Dois anos atrás foi $ano.</p>";

      //===============================================
   ?>
</body>
</html>