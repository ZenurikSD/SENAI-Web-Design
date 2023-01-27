/*função declarada que fará aquilo que foi mandado*/
function minhaFuncao(){
    document.getElementById("demo").innerHTML = "Olá, Mundo externo!"
}

/*Há várias maneiras de exibir a saída de um comando*/

/*Usando .innerHTML */
function outraFuncao(){
    document.getElementById("demo").innerHTML = 3 + 4
}

/*Usando document.write */
function outraFuncao2(){
    document.write(5 * 4)
}

/*Usando window.alert */
function outraFuncao3(){
    window.alert(6 / 3)
}

/*Usando console.log */
function outraFuncao4(){
    console.log(6 + 9)
}

/*Usando window.print */
function outraFuncao5(){
    window.print()
}

/*Chamada de variáveis var */

function outraFuncao6(){
    var x = 5;
    var y = 7;
    var z = x + y;
    window.alert("O valor de z é: " + z)
}

/*Utilizando o condicional if*/
function outraFuncao7(){
    var nome = prompt("Digite o seu nome");
    if (confirm("Quer ver seu nome?")){
        alert("Seu nome é: " + nome);
    }
}

/*Utilizando o condicional else */
function outraFuncao8(){
    var idade = prompt("Digite sua idade: ","0");
    /*Verifica se o valor não é numérico*/
    if (isNaN(idade)){
        alert("Você digitou algo incorreto");
    }
    else{
        (alert("Sua idade é: " + idade));
    }
}