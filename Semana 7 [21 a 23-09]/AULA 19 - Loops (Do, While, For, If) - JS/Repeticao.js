//- Exercício ----------------------------------------
function contadorPar(){
    var texto = ''

    //O número começa em zero, tem a condição de ser menor ou igual a 30
    // 
    for(numero = 0; numero <= 30; numero += 2){
        //Exibindo o resultado no console:
        window.console.log(numero)
        //Exibindo no documento, incrementamos ao o que já estiver na variável
        //texto, ao invés de substituir.
        texto += `[${numero}]  `
    }
    window.document.querySelector('#testes').innerHTML = texto
}

//- WHILE --------------------------------------------
function enquanto(){
    var contagem = 1
    var texto = ''

    //Enquanto a (contagem for menor ou igual que 5)..
    while (contagem <= 5){
        //imprima a contagem no log do console..
        window.console.log(contagem)
        //Junte ao valor (atribua mais) uma mensagem e a contagem..
        texto += '<br>O número é:' + contagem
        //e incremente (++) um.
        contagem++
    }
    window.document.querySelector('#testes').innerHTML = texto
}

//- DO WHILE --------------------------------------
function fazerEnquanto(){
    do{
        window.console.log(contagem)
    }
    while(contagem != 0)
}

//- FOR---------------------------------------------
function para(){
    for(contagem = 10; /*se*/contagem <= 0; /*incremente*/contagem++){
        window.console.log(contagem)
    }
}

//--Limpar---------------------------------------
function limpar(){
    const apagar = window.document.querySelector('#testes')

    apagar.innerHTML = ''
}