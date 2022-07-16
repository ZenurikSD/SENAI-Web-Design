//Tentando criar  o jogo de advinhe o número

//--------- Função de contar de um até cem ------------------
function umAcem(){
    const escreva = window.document.querySelector('#teste')
    
  	/* Sintaxe for 
	  Para(argumento de início;
  	        condição se; 
  	        incremento/decremento;){execute}*/

	//inicie a variável com 1. Se (enquanto) ela for menor que 100, incremente um.
  	for(var numeros = 1; numeros <= 100; numeros += 1){
  	  /*Mostre o array dos numeros.
  	  Incremente no parágrafo a variável números dentro de uma string.*/
  	  escreva.innerHTML += `[${numeros}] `
  	}
  	escreva.textContent += 'Consegui!!'
}

//------------------- Limpar --------------------------------
function limpar(){
    const apagar = window.document.querySelector('#teste')
    apagar.innerHTML = '' }
