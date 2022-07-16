function valida(){
    var _nome = window.document.querySelector('#nome1').value
    var _senha = window.document.querySelector('#pass1').value

    window.console.log(_nome)
    window.console.log(_senha)

    if(_nome=== "luiz eduardo" && _senha ==="5678"){
        window.alert(`seu nome foi aprovado  ${_nome}`)
    }
    else{
        window.alert(`seu nome não tem acesso ou senha errada ${_nome}`)
    }
}