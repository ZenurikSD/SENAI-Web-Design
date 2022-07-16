function explicandoArrays(){
    //Arrays em constantes:
    const carros = ['Ford', 'Volkswagen', 'General Motors'];
    const frutas = ['Maçã', 'Laranja', 'Banana'];
    
    const areaTeste = window.document.querySelector('#testes')
    areaTeste.innerHTML = 
      `<p>O array original é: [${carros}] </p>
       <p>Para string fica: [${carros.toString()}] </p>`
}

//--Exercício--------------------------------------
function arrayInfo(){
    var nome  = window.document.querySelector('#nome').value
    var idade = window.document.querySelector('#idade').value
    var sexo  = window.document.querySelector('#sexo').value

    const info = [nome, idade, sexo]
    const escreva = document.querySelector('#saida')

    escreva.innerHTML = 
        `Seu nome é ${info[0]}, você tem ${info[1]} anos e 
        é do sexo ${info[2]}, correto?`
}

//--Limpar---------------------------------------
function limpar(){
    const apagar = window.document.querySelector('#testes')
    apagar.innerHTML = '' }
