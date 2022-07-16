/*STRING é algo que foi nomeado em javascript */
let x = 'Pedro';

//document.getElementById("tamanhoX").innerHTML = x.length;
//O método length retorna o tamanho (número de caracteres) da variável x!


//document.getElementById("tamanhoX").innerHTML = x.slice(1,3);
//Método slice(inicio, fim)

//document.getElementById("tamanhoX").innerHTML = x.substring(2,5);
//Método substring (inicio, fim), parecido com o slice mas não aceita valores negativos

//document.getElementById("tamanhoX").innerHTML = x.substr(1,4);
//Método substr (inicio, tamanho), parecido com os anteriores com a diferença que você define um tamanho

function funcao1(){
    let str = document.getElementById("outraString").innerHTML;
    document.getElementById("outraString").innerHTML = str.replace ("Matutino", "Noturno");
}
//Método replace() troca alguma parte da string selecionada


//let _maius = "curso de web-designer";
//document.getElementById("text").innerHTML = _maius.toUpperCase();
//Método toUpperCase deixa o texto em letras maiúsculas


//let _minus = "CURSO DE WEB DESIGNER";
//document.getElementById("text").innerHTML = _minus.toLowerCase();
//Método toLowerCase deixa o texto em letras minúsculas

let a = "Pedro";
let b = "Rodrigues";
let c = a.concat(" ", b);
document.getElementById("conc").innerHTML = c;
//Método concat concatena duas ou mais strings


let texto = "     Senai Anchieta       ";
document.getElementById("tri").innerHTML = texto.trim();
//Método trim retira espaços em branco antes e depois do texto

let char = "Web-Designer";
document.getElementById("cA").innerHTML = char.charAt(5);
//Método charAt me retorna o caractere da posição desejada

let chbr = "SENAI - Anchieta";
document.getElementById("cB").innerHTML = chbr.charCodeAt(0);
//Método charCodeAt retorna o valor unicode da posição especificada

let chcr = "SENAI";
document.getElementById("cC").innerHTML = chcr[3];
//Chaves após uma string retorna a posição selecionada

let r = "Curso de Web-Designer - SENAI - Anchieta - SENAI - Noturno";
//document.getElementById("ind").innerHTML = r.indexOf("SENAI");
//O método indexOf retorna a posição em que inicia a primeira ocorrência do texto que você procura

document.getElementById("ind").innerHTML = r.lastIndexOf("SENAI");
//O método lastIndexOf retorna a posição em que inicia a última ocorrência do texto que você procura