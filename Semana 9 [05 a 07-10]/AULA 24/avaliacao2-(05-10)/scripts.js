function validar(){
    //Objeto usuário
    const usuario = {
        email: window.document.querySelector('#email').value,
        senha: window.document.querySelector('#pass').value }

    //Mostrar que o login foi bem sucedido e exibir as propriedades e seus valores
    window.console.log(usuario)
    window.document.querySelector('#p1').innerHTML = 
    'Resultado no console'

    //Mostrar a janela de usuário quando qualquer informação for adicionada
    //Não consegui fazer funcionar ainda
    if(usuario.email != null){
        window.document.querySelector('.userContainer').style.display = block;
        
    }
}
