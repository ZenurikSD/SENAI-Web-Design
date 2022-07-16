function validar(){
	//Objeto reserva, propriedades são os inputs, valor é o que o usuário preencher
	const reserva = {
		nome: window.document.querySelector('#nome').value,
		tel: window.document.querySelector('#tel').value,
		email: window.document.querySelector('#email').value,
		dia: window.document.querySelector('#dia').value
	}
	window.document.querySelector('#teste').innerHTML = reserva.nome
}