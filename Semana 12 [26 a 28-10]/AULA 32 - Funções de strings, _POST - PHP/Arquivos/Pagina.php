<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Alisson Silva">
   <title>AULA 32 - PHP</title>
	<link rel="stylesheet" href="Estilo.css">
</head>
<body>
	<!-- Cabeçalho ====================================== -->
	<h2>Funções de strings</h2>

	<!-- Principal ====================================== -->
	<main>
	
	<p><?php
	//--String nome ----------------------------------
		$nome = $_POST['nome'];
	
	//Função strlen mostra o tamanho de caracteres.
	echo "Seu nome, $nome, tem " . strlen($nome) . " caracteres. ";

	//string to upper case
	echo "Em maiúsculo fica ".strtoupper($nome);
	print '<br>';
	?></p>

	<p><?php
	//--String texto ------------------------------------
		$texto = $_POST['texto'];

	//string word count
	echo "O texto que você escreveu foi: <li><i>$texto</i></li>"

	?></p>




		
	</main>
	
	<!-- Seção ========================================== -->
	<section>
		
	</section>
	
</body>