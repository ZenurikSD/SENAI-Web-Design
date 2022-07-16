var nome = '';
var password = '';
			var versaoAgent = navigator.userAgent;

			document.oncontextmenu = function(){return false} 
			document.onmousedown = function(){return false} 
			document.onmouseup = function(){return false} 


            alert(Date());
			nome=prompt('insira seu nome para entrar:','');
			password=prompt('insira sua senha para entrar:','');

			if (nome.toLowerCase() == "luiz") {
				alert("nome certo");
			}
			if (password.toLowerCase() == "luiz06112004") {
				alert("Senha certa");
				document.write("<h2>Título de Página: "+document.title+"</h2>");
				document.write("<h2>Bem-vindo</h2>");

				
			}
			else{
				alert("senha errada");
                location.href="index2.html"
			}