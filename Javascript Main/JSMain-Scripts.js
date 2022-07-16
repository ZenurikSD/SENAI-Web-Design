	function notas(){
			//Variável 'nota' pega o valor do elemento com a #id selecionada
			var nota = window.document.querySelector('#notaDoUser').value

			//if(condição){forVerdadeira:dêUmValor}
			if(nota >= 7 && nota <= 10){
				window.document.querySelector('#pa1').innerHTML 
				= `Parabéns, você tirou ${nota} e está aprovado!`
			}
			//else if(outraCondicao){dêOutroValor}
			else if(nota < 7 && nota >= 3){
				window.document.querySelector('#pa1').innerHTML
				= `Atenção, sua nota foi de ${nota}, você fará recuperação da matéria.`
			} 
			//else if(maisUmaCondição){dêMaisUmValor}
			else if(nota <3 && nota >= 0){
				window.document.querySelector('#pa1').innerHTML
				= `Infelizmente, com uma nota de ${nota} você será reprovado.`
			}
			//else{forFalsa:dêOutrovalor}
			else{
				window.document.querySelector('#pa1').innerHTML
				= `Insira um valor de 0 a 10`
			}
		}