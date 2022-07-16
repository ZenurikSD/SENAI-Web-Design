//As variáveis recebem o valor inserido nos campos nome e senha.
function autenticar(){
    var nome = window.document.querySelector('#nome1').value;
    var pass = window.document.querySelector('#pass1').value;

    //A constante cria um 'atalho' para acessar o parágrafo de saída
    const saida = window.document.querySelector('#prgrf1');

    //Se o nome E senha forem estritamente iguais a ..., 
    //.. alerte o usuário e insira a mensagem no parágrafo de saída
    if(nome === 'Alisson' && pass === '1234'){
        window.alert('Você foi autenticado.');
        saida.innerHTML = `<b id='correto'>Seja bem vindo, ${nome}.</b>`
    }
    else{
        window.alert(`Você não está autenticado.`);
        saida.innerHTML = `<b id='errado'>Corrija suas informações.</b>`
    }
}

