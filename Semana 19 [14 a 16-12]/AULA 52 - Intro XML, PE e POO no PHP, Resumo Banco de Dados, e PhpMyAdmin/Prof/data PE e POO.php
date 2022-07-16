<?php
/* ----
	Programação em Módulo Estruturado 
 ---- */

	//define a àrea da relógio que será utilizada no php
	date_default_timezone_set('America/Sao_Paulo');

	//define variável $dia com os valores da data especificada
    $dia = date('d/m/y')."\n";
    
	//comando echo - escreve no browser os parâmetros definidos
	//função n12br - altera \n para o tag <br>
	echo nl2br($dia);

	/* 
		define variável $dia com os valores da data especificada 
		d/m/Y - dia/mês/ano completo
		H:i:s a - Hora 24:minutos:segundos escreve am/pm
	*/
		
	echo "<p>Data e o horário de São Paulo -".date('d/m/y H:i:s a', time())."</p>";


/* ----
	Programação em Módulo Orientação ao Objeto (OO) 
 ---- */

    //Define a variável $objDate como instância do objeto DateTime
	$objDate = new DateTime();
	
	//Define o atributo setTimezone (àrea da relógio) do objeto $objDatea 
	$objDate->setTimezone(new DateTimeZone('Europe/London'));

	//Define a variável $strDateAndTime a estrutura de formatação do objeto $objDate	
	$strDateAndTime = $objDate->format("l d-m-Y H:i:s A");  
	
	//comando echo - escreve no browser os parâmetros definidos
	echo "<p>Data e o horário de Londres neste momento - $strDateAndTime.</p>";
	

?>