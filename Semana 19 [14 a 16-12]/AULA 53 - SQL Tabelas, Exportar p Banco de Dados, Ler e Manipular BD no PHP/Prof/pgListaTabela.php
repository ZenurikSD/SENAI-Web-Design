<?php

		//estrutura de conexão com a base de dados em o banco de dados
		//127.0.0.1 - deve ser alterado para o ip do servidor da base de dados
		//root - deve ser alterado para o usuário de conexão a base de dados, o mesmo deve ter privilégios de acesso ao banco e as tabelas
		//'' - senha do usuário de acesso
		//dbsite -  banco de dados de conexão
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'dbsite');
		
		// Verificação se conexão não retorno nenhum tipo de erro de conexão, só irá retornar erro se os parametros de conexão 
		// estiverem errados ou o serviço do banco de dados não estiver iniciado.
		if (!$mysqli->connect_errno) {
			
			//Listado todos os contatos por ordem da data de registro de forma descrescente
			$sql = "SELECT * FROM tbcontato ORDER BY dteDataRegistro DESC";
			
			//executa o comando sql e retorna o resultado para a variável definida
			$result = $mysqli->query($sql);
	
			//verificar se retornou linhas na consulta
			if($result->num_rows <= 0) {
				
					echo("Nenhum registro de contato");
				
			}else{
				
				//Loop que irá imprimir no browser a lista dos contatos 
				while($row = $result->fetch_assoc()) {
					
						$data= $row["dteDataRegistro"];
						$id = $row["idContato"];
						$nome= $row["vchNome"];
						$email = $row["vchEmail"];
						$telefone = $row["vchTelefone"];
						
						echo($data."<br>");
						echo($nome."<br>");
						echo($email."<br>");
						echo($telefone."<br>");	
						echo("<a href='AcessoContato.php?acao=ver&idContato=".$id."'>Visualizar</a>    ");
						echo("<a href='AcessoContato.php?acao=del&&idContato=".$id."'>Deletar</a><br>");

					}
				}
			}

		
		$mysqli->close();
	
?>