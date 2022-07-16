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
	<h2 class="colorido">[28/10 Aula 34] Manipulando arquivos</h2>

	<!-- Explicações ====================================== -->
	<section class="cards cardsAlt">
		<blockquote class="folha">
		<?php
		echo readfile('dados.txt')
		//readfile(arquivo) lê o arquivo.

		?> 
		</blockquote>

		<!-- O Básico ======================================
		Para manipular o arquivo no PHP, siga a sequência:
			1 abrir
			2 modificar
			3 fechar o arquivo.

		fopen()
		  file open(arquivo, modo) ou(or) saída(mensagem)

		fread(arquivo, tamanho) 
		  lê o Arquivo e precisa de dois parâmetros, o arquivo e quanto do arquivo ele vai ler (em bytes)

		fwrite(arquivo, conteudo) escreve em um arquivo.

		fclose(arquivo) é óbvio 
		
		Modos:
			(r) Read. Abre um arquivo apenas para leitura, o ponteiro aparece no começo do arquivo.

			(w) Write. Abre apenas para escrita, apaga o conteúdo se o arquivo já existir, ou cria um novo se não. Ponteiro no começo.

			(a) Append? Abre para escrita. Dados existentes são preservados, cria se não existir. Ponteiro no final do arquivo.

			(x) Write Exclusive? Cria para leitura. Retorna FALSE e um erro se o arquivo já existir.

			(r+) Read/Write. Abre para leitura e escrita. Ponteiro no começo.

			(w+) Read/Write. Abre (ou cria) para leitura e escrita, mas conteúdo existente é apagado.	

			(a+) Read/Write. Abre (ou cria) para leitura e escrita, dados existentes são preservados. Ponteiro no final.

			(x+) Rd/Wt Exclusive? Cria um arquivo para leitura e escrita. Retorna FALSE e um erro se o arquivo já existir.
		-->
		<?php
		//criando um arquivo novo com modo leitura/escrita (x+). O texto é escrito apenas na criação, para "editar" ou adicionar mais, é preciso reabrir com outro modo. 
		$dados1 = 
		fopen('dadosRW.txt', 'w+') or exit("Sem arquivo");

		$texto = "Adicionando um texto ao arquivo.";
		fwrite($dados1, $texto);

		fclose($dados1);
		
		?>
	</section>

	<!-- Exercício ====================================== -->
	<section class="cards">
		<h3 class="colorido">Exercício - Resultado</h3>
		
		<?php
		//----Seção de variáveis-----------------
		$nome = $_POST["nome"];
		$conteudo = $_POST["conteudo"];

		#Abrindo no modo w+ para limpar o que já estiver escrito quando executar de novo.
		$arquivo1 = 
		fopen("documento.txt", "w+");

		$texto = "$nome\n $conteudo\n"; #\n quebra a linha.
		//Escreva no arquivo o conteúdo da var texto 
		fwrite($arquivo1, $texto);
		//Escreva também a seguinte mensagem
		$msgFinal = "Esse arquivo foi criado com permissões w+.";
		fwrite($arquivo1, $msgFinal);

		//Leia o todo o conteúdo e mostre na página.
		print fread($arquivo1, filesize("documento.txt")) . "<br>";
		echo 
			"<p>Por algum motivo, o fread() se recusa a exibir na página, mas o arquivo ainda é modificado. Mesmo nas páginas do professor não aparece nada?? Vou só pegar o valor das variáveis mesmo... </p>";
		?>
		
		<blockquote class="folha">
		<?php
		echo "<h4>$nome</h4>";
		echo "<li>$conteudo</li>";
		echo "<i>$msgFinal</i>";

		//Feche o arquivo.
		fclose($arquivo1);
		?>
		</blockquote>
	</section>
	
</body>