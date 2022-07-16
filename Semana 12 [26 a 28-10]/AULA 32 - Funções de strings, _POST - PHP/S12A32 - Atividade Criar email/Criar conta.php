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
	<h2>[26/10 Aula 32] Crie uma conta</h2>

	<!-- Principal ====================================== -->
	<main>
	<section id="janela1">
	<p><?php
	//Variáveis tratadas
	$nome  = trim(strtolower($_POST['nome']));
	$snome = trim(strtolower($_POST['snome']));


	//Formatando o nome para o título
	$nomeTit = ucfirst($nome);

	echo "<h3>Seja bem vindo, $nomeTit!</h3>";
	echo "Seu novo e-mail é <span id='endCriado'>$nome.$snome@email.com</span>";
	?></p>

	<button type="button" name="voltar" id="voltar">
		<a href="Criar conta.html">Voltar</a>
	</button>

	</section>		
	</main>
	
</body>