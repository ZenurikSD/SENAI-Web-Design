<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulário teste</title>
</head>
<body>
   <?php
      $nome  = $_GET["nome"];
      $snome = $_GET["sobrenome"];
      $idade = $_GET["idade"];
      $email = $_GET["email"];

      echo "<h2>PHP: Recebi!</h2>";

      echo "<ul><li>Nome: $nome</li>";
      echo "<li>Sobrenome: $snome</li>";
      echo "<li>Idade: $idade</li>";
      echo "<li>E-mail: $email</li></ul>";
   
   ?>
</body>
</html>