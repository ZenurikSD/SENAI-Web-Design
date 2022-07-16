<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilo.css">
   <title>Voltando ao CSS</title>
</head>

<body class="body">
	<!-- Principal ====================================== -->
   <main>
   <?php
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $mensagem = $_POST["msg"];

   #Abrindo no modo w+ para limpar o que já estiver escrito quando executar de novo.
   $arquivo1 = 
   fopen("documento.txt", "w+");

   $texto = "Nome: $nome\n 
             E-mail: $email\n
             Mensagem: $mensagem\n"; #\n quebra a linha no arquivo.

   //Escreva no arquivo o conteúdo da var texto 
   fwrite($arquivo1, $texto);
   //Escreva também a seguinte mensagem
   $msgFinal = "Arquivo gerado pelo PHP, modo w+.";
   fwrite($arquivo1, $msgFinal);

   echo "<p>Seus dados foram salvos.<p>";

   fclose($arquivo1);
   ?>
   <button type="button"><a href="Retomando CSS.html" class="linkAlt">Voltar</a></button>
   </main>

	
</body>