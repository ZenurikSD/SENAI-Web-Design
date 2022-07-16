<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css"/>
   <title>Aula 33 - PHP</title>
</head>
<body>
	<!-- Cabeçalho ====================================== -->
	<h2>[27/10 Aula 33] Arrays no PHP</h2>

	<!-- Atividade ====================================== -->
	<main>
		<h3>Atividade</h3>
		<p>Faça um programa que pegue nome, sobrenome e idade de um formulário e envie para um array com posições nomeadas.</p>>
		<?php
		
		$nome = (ucfirst(trim(strtolower($_POST['nome']))));
		$snome = (ucfirst(trim(strtolower($_POST['snome']))));
		$idade = $_POST['idade'];
		
		$pessoa = array(
			"nome" => $nome,
			"sobrenome" => $snome,
			"idade" => $idade);
		?>

		<blockquote class="borda1">
			<?php
			print "Pessoa: $nome $snome, $idade anos.";
			?>
		</blockquote>
	</main>

	<!-- Aula ========================================== -->
	<section class="janela">
		<b>Saída de comandos</b>
		<?php
		//Arrays no PHP são criados usando a funçáo array()
		$mochila = array(
			'roupas', 'lanche', 'pasta', 'guarda-chuva' );
			
			echo "O primeiro item da minha mochila é: ".$mochila[0].'<br>';
			//Print-readable exibe o código escolhido de forma legível.
			print_r($mochila).'<br>';

			//Também dá para atribuir valores a uma posição específica no array, ou até dar um nome para a posição
			$mochila[4] = 'agenda';
		
		//Como o PHP não possui matrizes/vetores, usa-se um array dentro de outro para imitar isso:
		$frutas = array(
			//    fruta,  qtd, vendidos
			array("maçãs" , 20, 10),
			array("mangas", 12, 5 ),
			array("uvas" , 30, 24),
		);

		echo '<br><br>';
		//Array frutas, posição 0, está o array maçãs. Na posição 0 desse, está a quantidade
		echo "Fruta: ".$frutas[0][0].". Qtd: ".$frutas[0][1];
		?>
	</section>
	
</body>