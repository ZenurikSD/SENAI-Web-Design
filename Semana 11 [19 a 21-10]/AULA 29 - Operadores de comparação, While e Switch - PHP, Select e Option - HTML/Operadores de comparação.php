<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF8">
    <meta httpequiv="XUACompatible" content="IE=edge">
    <meta name="viewport" content="width=devicewidth, initialscale=1.0">
    <title>Alisson Silva</title>

    <link rel="stylesheet" href="/../Javascript Main/jsMainStyle.css">
    <script src="testes.js" defer></script>
</head>
<body>
	<h2>Operadores de comparação?</h2>
	
	<?php
	//operador ternário. É um if else compacto:
	// teste ? if-true : if-false
	$n1 = 3; $n2 = 5;
	
	$maior = $n1 > $n2 ? 
	/*true*/"$n1 é maior que $n2" :
	/*false*/"$n1 não é maior que $n2";
	echo $maior . '<br>';
	
	$menorigual = $n1 >= $n2 ?
	/*true*/"$n1 é menor ou igual que n2" :
	/*false*/"$n1 não é menor ou igual que $n2";
	echo $menorigual . "<br>";
	
	$igualdade = $n1 == $n2 ?
	/*true*/"$n1 e $n2 são iguais (==)" : 
	/*false*/"$n1 e $n2 são diferentes (!=)";
	echo $igualdade . "<br>"
	?>
	
	<h2>While</h2>
	<?php
	//while (teste){comando}
	$i = 0;
	while ($i <= 10){
		echo $i++ . " ";
	}
	?>

	<p><h2>Switch</h2><?php
	//"Switch é como se fosse um monte de if..else um dentro do outro"
	/*SINTAXE: 
		switch (teste){ 
			caso 0: Comando, 
			caso 1: comando, 
			(..) 
			default: comando } */
	$cor = $_POST["textoCor"];
	switch ($cor){
		case "azul": echo "Você escolheu azul"; break;
		case "verde": echo "Você escolheu verde"; break;
		case "amarelo": echo "Você escolheu amarelo"; break;
		default: echo "Você escolheu vermelho"; break;
	}
	?>
	</p>
	
	
</body>