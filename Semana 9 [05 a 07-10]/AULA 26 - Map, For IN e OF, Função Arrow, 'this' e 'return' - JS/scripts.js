//Variáveis globais
const saida = document.querySelector('#teste')

//================== This ============================
//Objeto que tem uma função que junta as duas propriedades
const pessoa = {
	pnome : 'Alisson',
	snome : 'Silva',
	idade : '21',
	
	//'this' é usado para fazer referência ao próprio objeto
	nomeCompleto : function(){
		return `${this.pnome} ${this.snome}`
	}
}
//=================== Map() ===========================
//Colocando valores em um mapa através de um array
var frutas = new Map([
	[a = 'maçãs', 		5], /*ñ entendi pq aqui precisa dos colchetes também */
	[b = 'laranjas', 10],
	[c = 'uvas', 	  30]
])

// -- Métodos do map servem para adicionar, remover, listar, enumerar, etc.
// -- Existem vários e não é difícil entender como usar. Aqui estão alguns:

//Adicionando valores ao mapa utilizando set()
frutas.set('morangos', 12)

//Para acessar uma chave do mapa, usa-se o método get()
saida.innerHTML += `Eu tenho <code>${frutas.get(a)}</code> maçãs. <br>`

//Método .size (sem argumentos) retorna o tamanho do array.
saida.innerHTML += `Tenho <code>${frutas.size}</code> tipos de frutas. <br>`

//O forEach é usado para retornar cada valor e chave individualmente, e faz isso percorrendo cada par, um a um. Ou seja, é uma função iteradora.
//Mas atenção, que por algum motivo ele inverte a ordem usada pelo Map, fica (v, c) e não (c, v).

saida.innerHTML += `Minha sacola tem: `
frutas.forEach(
	function(valor, chave){
		saida.innerHTML += `<code>${valor} ${chave}</code>, `
	}
)

//-----------------------------------------------
//Criando um novo mapa com valores dos tipos variável e número.
let conjuntos = new Map()
var nat = [0, 1, 2, 3, "..."]
var int = ["...", -3, -2, -1, nat]

//Adicionando essas variáveis ao mapa vazio.
//Truque do método set: Ele termina retornando o Map, então dá para fazer vários sem ter que chamar o Map de novo.

conjuntos.set('Naturais', nat)
			.set('Inteiros', int);

saida.innerHTML += `<h4>Conjuntos numéricos:</h4>`

//Mesma coisa do último forEach, essencialmente
conjuntos.forEach(
	function(valor, chave){
		saida.innerHTML += `<code>${chave} = ${valor}</code><br>`
	}
)

//============== Loops for..in e for..of ===============
//O loop for..in itera (percorre) as propriedades de um objeto. Não se aplica à outros tipos de objetos iteráveis, como um Map ou Array.
//....Estou usando a constante pessoa, que já existe lá no topo.
//....Lembrando, propriedade = chave 

//para (variável em objeto){faça e retorne}
saida.innerHTML += `<h4>Objeto pessoa: </h4>`
for (var propriedade in pessoa){
	/*Aqui é interessante. Além da chave, eu posso pegar o valor já que a variável pega o índice de cada elemento. O valor aparece ao usar objeto[indice].*/
	saida.innerHTML += `<li>${propriedade}: ${pessoa[propriedade]}</li> `
}
//------------------------------------------------------
//Criando um mapa inserindo um array diretamente,
// usando o método entries() para listar os seus elementos,
// e utilizando o loop for..of para percorrer cada elemento e retornar seu valor.
let webd = new Map([
	['Estrutura', 'HTML'],
	['Estilo', 'CSS'],
	['Programação', 'Javascript']
])

//O for..of itera (percorre) pelos valores de -qualquer- objeto iterável, qualquer estrutura de dados, tipo Arrays, Maps, Strings e vários outros. 
saida.innerHTML += `<h4>Web Design: </h4>`
for(var elemento of webd.entries()){
	saida.innerHTML += `<code>${elemento}</code><br>`
}
//=====================================================