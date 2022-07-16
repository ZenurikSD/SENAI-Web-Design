<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP básico</title>
</head>
<body>
   <h2>PHP básico</h2>
   <p>O PHP é uma linguagem de scripts para servidor, um pré-processador HTML. Nâo sei se substitui o JS, mas funciona praticamente da mesma forma, só que com uma sintaxe diferente.</p>
   <?php 
      echo '<h3> Variáveis e operadores matemáticos: </h3>';
      $valor1 = 16;
      $valor2 = 6;
      $valor3 = -39;
      $saudação = 'Olá! ';

      echo $saudação."Temos os números: A = $valor1; B = $valor2; C = $valor3 <br>";

      $operação = $valor1 % $valor2;
      //Para concatenar (juntar) se usa o ponto, não o símbolo (+) como é no JS.
      echo "Resultado (mod%) = ".$operação.'<br>';

      //-----------------------------------------
      echo "<h3> Funções matemáticas: </h3>";
      //Função abs() retorna o valor absoluto (em matemática eu conheço como módulo |n|)
      //Não entendi porquê começar nisso..
      echo 'O número '.$valor3.' tem valor absoluto de '.abs($valor3).'<br>';
      
      //Função pow() (X to the power of Y). É exponenciação.
      echo "A potência de $valor1 por $valor2 é = ".pow($valor1, $valor2).'<br>';

      //Função srqt() retorna a raiz quadrada
      echo "<p>A raiz quadrada de $valor1 é = ".sqrt($valor1).'<br>';

      //Função round() arredonda um número decimal (não é o mesmo que pegar a parte inteira)
      $divisão = $valor1 / $valor2;
      echo "A divisão entre $valor1 e $valor2 é = $divisão".'<br>';
      echo "Ao arredondar fica = ".round($divisão).'<br>';

      //Função intval() (integer value) retorna o a parte inteira de um número decimal
      echo "E a parte inteira é = ".intval($divisão).'</p>';

      //Função number_format() é o que já diz. Você precisa definir uns parâmetros nos argumentos. O VSCode ajuda.
      $milhão = 2580900.480999;
      echo "<p>A quantia bruta é de $milhão. Como tornar esse número legível? <br>";
      echo 'A verba foi de R$ '.number_format($milhão,2,",",".")

   ?>
   
</body>
</html>