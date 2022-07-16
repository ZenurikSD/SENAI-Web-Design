//------------ Objeto ficha pessoal-------------------
function fichaObjeto(){
    //variáveis para pegar o valor dos pets
    let pet1 = window.document.querySelector('#pet1').value
    let pet2 = window.document.querySelector('#pet2').value
    let pet3 = window.document.querySelector('#pet3').value 

    //objeto = {propriedade: valor}
    const pessoa = {
        nome:       window.document.querySelector('#nome').value,
        sobrenome:  window.document.querySelector('#sobrenome').value,
        idade:      window.document.querySelector('#idade').value,
        pets:       [pet1, pet2, pet3]
    }

    //Linkar a constante 'escrever' ao endereço e colocar a mensagem.
    const escrever = window.document.querySelector('#teste')
    escrever.innerHTML = `Seu nome é ${pessoa.nome} ${pessoa.sobrenome}, você tem ${pessoa.idade} anos e possui os seguintes pets: ${pessoa.pets[0]}, ${pessoa.pets[1]} e ${pessoa.pets[2]}.`
}

//--Limpar---------------------------------------
function limpar(){
    const apagar = window.document.querySelector('#teste')
    apagar.innerHTML = '' }